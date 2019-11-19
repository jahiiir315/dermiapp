<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empleados Controller
 *
 * @property \App\Model\Table\EmpleadosTable $Empleados
 *
 * @method \App\Model\Entity\Empleado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadosController extends AppController
{
    public function isAuthorized($user){
        if(isset($user['role']) and $user['role'] === 'admin'){
            if(in_array($this->request->action, ['index','view','add','edit','delete'])){
                return true;
            }
        }else{
            //si no es admin
            if(in_array($this->request->action, ['index','view'])){
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
        $empleados = $this->paginate($this->Empleados);

        $this->set(compact('empleados'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleado = $this->Empleados->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('empleado', $empleado);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleado = $this->Empleados->newEntity();
        if ($this->request->is('post')) {
            $empleado = $this->Empleados->patchEntity($empleado, $this->request->getData());
            if ($this->Empleados->save($empleado)) {
                $this->Flash->success(__('El empleado ha sido guardado.', 'Empleado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El empleado no puedo ser guardado. Intente de nuevo', 'Empleado'));
        }
        $users = $this->Empleados->Users->find('list', ['limit' => 200]);
        $this->set(compact('empleado', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleado = $this->Empleados->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleado = $this->Empleados->patchEntity($empleado, $this->request->getData());
            if ($this->Empleados->save($empleado)) {
                $this->Flash->success(__('El empleado ha sido guardado.', 'Empleado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El empleado no puedo ser guardado. Intente de nuevo', 'Empleado'));
        }
        $users = $this->Empleados->Users->find('list', ['limit' => 200]);
        $this->set(compact('empleado', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleado = $this->Empleados->get($id);
        if ($this->Empleados->delete($empleado)) {
            $this->Flash->success(__('El empleado ha sido eliminado.', 'Empleado'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el empleado. Intente de nuevo.', 'Empleado'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
