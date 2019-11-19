<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use App\Model\Entity\MembresiasUser;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        if($this->Auth->user()){
            $this->viewBuilder()->setTheme('AdminLTE');
        }
    }

    public function isAuthorized($user){
        if(isset($user['role']) and $user['role'] === 'admin'){
            if(in_array($this->request->action, ['home','logout','index','view','add','edit','delete'])){
                return true;
            }
        }else{
            //si no es admin
            if(in_array($this->request->action, ['logout', 'login'])){
                return true;
            }
        }
    }

    public function beforeRender(Event $event){
        if($this->Auth->user()){
            if(in_array($this->request->action, ['login'])){
                return $this->redirect(['controller'=>'clientes','action' => 'index']);
            }
        }
    }

    public function beforeFilter(Event $event){
        $this->Auth->allow(['add','login']);
        if($this->Auth->user()){
            $this->set('current_user',$this->Auth->user());
        }
    }

    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error('Datos incorrectos', ['key' => 'auth']);
            }
        }
    }

    public function home(){
        $this->render();
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->Users->find();
        // $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Clientes', 'Membresias']
        ]);

        $this->set('user', $user);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user['role']='user';

            if ($this->Users->save($user)) {

                if($this->Auth->user()['role']!='admin'){
                    // $this->Auth->setUser($user);
                    // Cuando un usuario se registra se le agrega e plan basico de membresias
                    $membresiasUserTable = TableRegistry::getTableLocator()->get('membresias_users');
                    $membresiaUser = $membresiasUserTable->newEntity([
                        'membresia_id' => 1,
                        'user_id' => $user['id'],
                        'fecha_inicio' => new \DateTime('now'),
                        'fecha_fin' => new \DateTime('now'),
                        'costo' => floatval(0.0),
                        'estado' => 'activo',
                        'intentos' => 3
                    ]);
                    $membresiasUserTable->save($membresiaUser);
                    $this->Flash->success(__('Registrado correctamente', 'User'));
                    return $this->redirect(['controller'=>'users','action' => 'login']);
                }

                $this->Flash->success(__('Eñ usuario ha sido guardado.', 'User'));
                return $this->redirect(['controller'=>'users','action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser guardado. Intente de nuevo.', 'User'));
        }
        $this->set(compact('user', 'clientes', 'doctores', 'empleados', 'membresias'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Clientes', 'Empleados', 'Membresias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user['role']=$this->request->getData()["role"];
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido modificado', 'User'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el usuario.ñ Intente de nuevo.', 'User'));
        }

        $this->set(compact('user'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado', 'User'));
        } else {
            $this->Flash->error(__('El usuario no pudo ser eliminado. Intente de nuevo', 'User'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
