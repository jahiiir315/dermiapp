<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;



/**
 * MembresiasUsers Controller
 *
 * @property \App\Model\Table\MembresiasUsersTable $MembresiasUsers
 *
 * @method \App\Model\Entity\MembresiasUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MembresiasUsersController extends AppController
{
    public function isAuthorized($user){
        if(isset($user['role']) and $user['role'] === 'admin'){
            if(in_array($this->request->action, ['index','view','add','edit','delete'])){
                return true;
            }
        }else{
            //si no es admin
            if(in_array($this->request->action, ['index', 'view','add'])){
                return true;
            }
        }
    }

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setTheme('AdminLTE');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Membresias', 'Users']
        ];

        $membresiaActiva = '';
        if($this->Auth->user()['role']==='admin'){
            $membresiasUsers = $this->MembresiasUsers->find();
        }else{
            $membresiasUsers = $this->MembresiasUsers->find()->where(['user_id' => $this->Auth->user()['id']]);
            $membresiasActivas = $this->MembresiasUsers->find()->where(['user_id' => $this->Auth->user()['id']],["estado"=>'activo']);
            foreach($membresiasActivas as $membresia){
                if($membresia['fecha_inicio']>=$membresia['fecha_fin']){
                    $membresia['estado'] = 'inactivo';
                    $this->MembresiasUsers->save($membresia);
                }
            }
            // $membresiaActiva = $membresiasActivas->first();

        }

        $this->set(compact('membresiasUsers'));
    }

    // public function beforeFilter(Event $event){
    //     parent::beforeFilter($event);
    //     if($this->Auth->user()['role']==='user'){
    //         $membresiasActivas = $this->MembresiasUsers->find()->where(['user_id' => $this->Auth->user()['id'],"estado"=>'activo']);
    //         $this->set('membresiaActiva',$membresiasActivas->first());
    //     }
    // }

    /**
     * View method
     *
     * @param string|null $id Membresias User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membresiasUser = $this->MembresiasUsers->get($id, [
            'contain' => ['Membresias', 'Users']
        ]);

        $this->set('membresiasUser', $membresiasUser);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membresiasUser = $this->MembresiasUsers->newEntity();
        if ($this->request->is('post')) {
            if($this->Auth->user['role'] === 'admin'){
                $membresiasUser = $this->MembresiasUsers->patchEntity($membresiasUser, $this->request->getData());
            }else{
                $promocion = $this->request->getData()['promocion'];
                $membresiasUser['membresia_id'] = 2;
                $membresiasUser['user_id'] = $this->Auth->user()['id'];
                $membresiasUser['intentos'] = 9999999;
                $membresiasUser['estado'] = 'activo';
                switch ($promocion) {
                    case '1':
                        $membresiasUser['fecha_inicio'] = new \DateTime('now');
                        $membresiasUser['fecha_fin'] = new \DateTime('+1 month');
                        $membresiasUser['costo'] = 50;
                        break;
                    case '2':
                        $membresiasUser['fecha_inicio'] = new \DateTime('now');
                        $membresiasUser['fecha_fin'] = new \DateTime('+2 month');
                        $membresiasUser['costo'] = 90;
                        break;
                    case '3':
                        $membresiasUser['fecha_inicio'] = new \DateTime('now');
                        $membresiasUser['fecha_fin'] = new \DateTime('+3 month');
                        $membresiasUser['costo'] = 130;
                        break;
                }
                // $membresiasUser = 
            }
            if ($this->MembresiasUsers->save($membresiasUser)) {
                //Luego de guardar, buscar su membresia gratis y cambiarle al estado desactivado
                $membresiasActivas = $this->MembresiasUsers->find()->where(['user_id' => $this->Auth->user()['id'],'membresia_id'=>1]);
                $membresiasUserFree = $membresiasActivas->first();
                $membresiasUser['estado']='inactivo';
                $this->MembresiasUsers->save($membresiasUserFree);

                $this->Flash->success(__('La membresia ha sido adquirida', 'Membresias User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No pudo adquirir esta membresia. Intente de nuevo.', 'Membresias User'));
        }
        $membresias = $this->MembresiasUsers->Membresias->find('list', [
            'keyField' => 'id',
            'valueField' => 'nombre'
        ]);
        $users = $this->MembresiasUsers->Users->find('list',[
            'keyField' => 'id',
            'valueField' => 'email'
        ]);
        $this->set(compact('membresiasUser', 'membresias', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Membresias User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membresiasUser = $this->MembresiasUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membresiasUser = $this->MembresiasUsers->patchEntity($membresiasUser, $this->request->getData());
            if ($this->MembresiasUsers->save($membresiasUser)) {
                $this->Flash->success(__('La membresia ha sido adquirida', 'Membresias User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No pudo adquirir esta membresia. Intente de nuevo.', 'Membresias User'));
        }
        $membresias = $this->MembresiasUsers->Membresias->find('list', ['limit' => 200]);
        $users = $this->MembresiasUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('membresiasUser', 'membresias', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Membresias User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membresiasUser = $this->MembresiasUsers->get($id);
        if ($this->MembresiasUsers->delete($membresiasUser)) {
            $this->Flash->success(__('La membresia ha sido eliminada.', 'Membresias User'));
        } else {
            $this->Flash->error(__('No se pudo eliminar la membresia. Intente de nuevo.', 'Membresias User'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
