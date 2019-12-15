<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;



/**
 * ClientesUsers Controller
 *
 * @property \App\Model\Table\ClientesUsersTable $ClientesUsers
 *
 * @method \App\Model\Entity\ClientesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesUsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setTheme('AdminLTE');
    }

    public function isAuthorized($user){
        if(isset($user['role']) and $user['role'] === 'admin'){
            if(in_array($this->request->action, ['index','view','add','edit','delete'])){
                return true;
            }
        }else{
            //si no es admin
            $membresiasUserTable = TableRegistry::getTableLocator()->get('membresias_users');
            $membresiasActivas = $membresiasUserTable->find()->where(['user_id' => $this->Auth->user()['id'],'estado'=>'activo']);
            $membresiasActiva = $membresiasActivas->first();
            if(isset($membresiasActiva['estado'])){
                if(in_array($this->request->action, ['index','view','add','delete'])){
                    return true;
                }
            }else{
                if(in_array($this->request->action, ['index','view'])){
                    return true;
                }
            }
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Clientes']
        ];
        if($this->Auth->user()['role']==='admin'){
            $clientesUsers = $this->ClientesUsers->find("all", ['contain' => ['Users', 'Clientes']]);
        }else{
            $clientesUsers = $this->ClientesUsers->find("all", ['contain' => ['Users', 'Clientes']])->where(['ClientesUsers.user_id' => $this->Auth->user()['id']]);
        }

        // $this->set(compact('clientesUsers'));
        $this->set([
            'clientesUsers' => $clientesUsers,
            '_serialize' => [
                'clientesUsers'
                ]
            ]);
    }

    /**
     * View method
     *
     * @param string|null $id Clientes User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientesUser = $this->ClientesUsers->get($id, [
            'contain' => ['Users', 'Clientes']
        ]);

        $this->set('clientesUser', $clientesUser);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientesUser = $this->ClientesUsers->newEntity();
        if ($this->request->is('post')) {
            $clientesUser = $this->ClientesUsers->patchEntity($clientesUser, $this->request->getData());
            if($this->Auth->user()['role']==='user'){
                $clientesUser['user_id'] = $this->Auth->user()['id'];
            }
            if ($this->ClientesUsers->save($clientesUser)) {
                //Despues de guardar el diagnostico descontar los intentos
                if($this->Auth->user()['role']==='user'){
                    $membresiasUserTable = TableRegistry::getTableLocator()->get('membresias_users');
                    $membresiasActivas = $membresiasUserTable->find()->where(['user_id' => $this->Auth->user()['id'],'membresia_id'=>1]);
                    $membresiasUser = $membresiasActivas->first();
                    if(isset($membresiasUser) and $membresiasUser['estado']==='activo'){
                        if($membresiasUser['intentos'] > 0){
                            $membresiasUser['intentos'] = $membresiasUser['intentos'] - 1;
                        }
                        if($membresiasUser['intentos'] < 1){
                            $membresiasUser['estado'] = 'inactivo';
                        }
                    }
                    $membresiasUserTable->save($membresiasUser);
                }

                $this->Flash->success(__('El diagnostico ha sido guardado.', 'Clientes User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El diagnostico no pudo ser guardado. Intente de nuevo', 'Clientes User'));
        }
        $users = $this->ClientesUsers->Users->find('list',[
            'keyField' => 'id',
            'valueField' => 'email'
        ]);
        // $clientes = $this->ClientesUsers->Clientes->find('list', ['limit' => 200]);
        if($this->Auth->user()['role']==='user'){
            $clientes = $this->ClientesUsers->Clientes->find('list',[
                'keyField' => 'id',
                'valueField' => function($cliente){
                    return $cliente->get('label');
                }
            ])->where(['user_id'=>$this->Auth->user()['id']]);
        }else{
            $clientes = $this->ClientesUsers->Clientes->find('list',[
                'keyField' => 'id',
                'valueField' => function($cliente){
                    return $cliente->get('label');
                }
            ]);
        }

        $this->set(compact('clientesUser', 'users', 'clientes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Clientes User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientesUser = $this->ClientesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientesUser = $this->ClientesUsers->patchEntity($clientesUser, $this->request->getData());
            if ($this->ClientesUsers->save($clientesUser)) {
                $this->Flash->success(__('El diagnostico ha sido guardado.', 'Clientes User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El diagnostico no pudo ser guardado. Intente de nuevo', 'Clientes User'));
        }
        $users = $this->ClientesUsers->Users->find('list', ['limit' => 200]);
        $clientes = $this->ClientesUsers->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesUser', 'users', 'clientes'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Clientes User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientesUser = $this->ClientesUsers->get($id);
        if ($this->ClientesUsers->delete($clientesUser)) {
            $this->Flash->success(__('El diagnostico ha sido eliminado.', 'Clientes User'));
        } else {
            $this->Flash->error(__('El diagnostico no pudo ser eliminado', 'Clientes User'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
