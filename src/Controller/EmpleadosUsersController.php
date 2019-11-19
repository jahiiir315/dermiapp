<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * EmpleadosUsers Controller
 *
 * @property \App\Model\Table\EmpleadosUsersTable $EmpleadosUsers
 *
 * @method \App\Model\Entity\EmpleadosUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadosUsersController extends AppController
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
            'contain' => ['Empleados', 'Users']
        ];

        if($this->Auth->user()['role']==='admin'){
            $empleadosUsers = $this->EmpleadosUsers->find();
        }else{
            $empleadosUsers = $this->EmpleadosUsers->find()->where(['user_id'=>$this->Auth->user()['id']]);
        }

        $this->set(compact('empleadosUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleados User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadosUser = $this->EmpleadosUsers->get($id, [
            'contain' => ['Empleados', 'Users']
        ]);

        $this->set('empleadosUser', $empleadosUser);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadosUser = $this->EmpleadosUsers->newEntity();
        if ($this->request->is('post')) {
            $empleadosUser = $this->EmpleadosUsers->patchEntity($empleadosUser, $this->request->getData());
            $empleadosUser['user_id'] = $this->Auth->user()['id'];

            if ($this->EmpleadosUsers->save($empleadosUser)) {
                $this->Flash->success(__('ULa solicitud para asesoría web ha sido guardada', 'Empleados User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar la solicitud. Intente de nuevo', 'Empleados User'));
        }
        $empleados = $this->EmpleadosUsers->Empleados->find('list', ['limit' => 200]);
        $empleados = $this->EmpleadosUsers->Empleados->find('list',[
            'keyField' => 'id',
            'valueField' => function($empleado){
                return $empleado->get('label');
            }
        ]);
        $users = $this->EmpleadosUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('empleadosUser', 'empleados', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Empleados User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadosUser = $this->EmpleadosUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadosUser = $this->EmpleadosUsers->patchEntity($empleadosUser, $this->request->getData());
            if ($this->EmpleadosUsers->save($empleadosUser)) {
                $this->Flash->success(__('ULa solicitud para asesoría web ha sido guardada', 'Empleados User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar la solicitud. Intente de nuevo', 'Empleados User'));
        }
        $empleados = $this->EmpleadosUsers->Empleados->find('list', ['limit' => 200]);
        $users = $this->EmpleadosUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('empleadosUser', 'empleados', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Empleados User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadosUser = $this->EmpleadosUsers->get($id);
        if ($this->EmpleadosUsers->delete($empleadosUser)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Empleados User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Empleados User'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
