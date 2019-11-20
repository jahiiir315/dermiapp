<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * DoctoresUsers Controller
 *
 * @property \App\Model\Table\DoctoresUsersTable $DoctoresUsers
 *
 * @method \App\Model\Entity\DoctoresUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DoctoresUsersController extends AppController
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
            'contain' => ['Doctores', 'Users']
        ];

        if($this->Auth->user()['role']==='admin'){
            $doctoresUsers = $this->DoctoresUsers->find('all',['contain' => ['Doctores', 'Users']]);
        }else{
            $doctoresUsers = $this->DoctoresUsers->find('all',['contain' => ['Doctores', 'Users']])->where(['user_id'=>$this->Auth->user()['id']]);
        }


        $this->set(compact('doctoresUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Doctores User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctoresUser = $this->DoctoresUsers->get($id, [
            'contain' => ['Doctores', 'Users']
        ]);

        $this->set('doctoresUser', $doctoresUser);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctoresUser = $this->DoctoresUsers->newEntity();
        if ($this->request->is('post')) {
            $doctoresUser = $this->DoctoresUsers->patchEntity($doctoresUser, $this->request->getData());
            $doctoresUser['user_id'] = $this->Auth->user()['id'];
            if ($this->DoctoresUsers->save($doctoresUser)) {
                $this->Flash->success(__('Usted ha solicitado una asesoria médica. Le llamaremos en la brevedad posible', 'Doctores User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La asesoria medica no pudo ser registrada', 'Doctores User'));
        }
        $doctores = $this->DoctoresUsers->Doctores->find('list',[
            'keyField' => 'id',
            'valueField' => function($doctor){
                return $doctor->get('label');
            }
        ]);
        $users = $this->DoctoresUsers->Users->find('list',[
            'keyField' => 'id',
            'valueField' => 'email'
        ]);
        $this->set(compact('doctoresUser', 'doctores', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Doctores User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctoresUser = $this->DoctoresUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctoresUser = $this->DoctoresUsers->patchEntity($doctoresUser, $this->request->getData());
            if ($this->DoctoresUsers->save($doctoresUser)) {
                $this->Flash->success(__('Se editó correctamente la asesoria médica', 'Doctores User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo editar la asesoría medica. Intente de nuevo', 'Doctores User'));
        }
        $doctores = $this->DoctoresUsers->Doctores->find('list',[
            'keyField' => 'id',
            'valueField' => function($doctor){
                return $doctor->get('label');
            }
        ]);
        $users = $this->DoctoresUsers->Users->find('list',[
            'keyField' => 'id',
            'valueField' => 'email'
        ]);
        $this->set(compact('doctoresUser', 'doctores', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Doctores User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctoresUser = $this->DoctoresUsers->get($id);
        if ($this->DoctoresUsers->delete($doctoresUser)) {
            $this->Flash->success(__('La asesoria medica ha sido eliminada.', 'Doctores User'));
        } else {
            $this->Flash->error(__('La asesoría médica no pudo ser eliminada. Intente de nuevo.', 'Doctores User'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
