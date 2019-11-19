<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doctores Controller
 *
 * @property \App\Model\Table\DoctoresTable $Doctores
 *
 * @method \App\Model\Entity\Doctore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DoctoresController extends AppController
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
            if(in_array($this->request->action, ['index','view'])){
                return true;
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
        $doctores = $this->Doctores->find();

        $this->set(compact('doctores'));
    }

    /**
     * View method
     *
     * @param string|null $id Doctore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doctore = $this->Doctores->get($id);

        $this->set('doctore', $doctore);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctore = $this->Doctores->newEntity();
        if ($this->request->is('post')) {
            $doctore = $this->Doctores->patchEntity($doctore, $this->request->getData());
            if ($this->Doctores->save($doctore)) {
                $this->Flash->success(__('El doctor ha sido guardado.', 'Doctore'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El doctor No pudo ser guardado. Intente de nuevo', 'Doctore'));
        }
        $users = $this->Doctores->Users->find('list', ['limit' => 200]);
        $this->set(compact('doctore', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Doctore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctore = $this->Doctores->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctore = $this->Doctores->patchEntity($doctore, $this->request->getData());
            if ($this->Doctores->save($doctore)) {
                $this->Flash->success(__('El doctor ha sido guardado.', 'Doctore'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El doctor No pudo ser guardado. Intente de nuevo', 'Doctore'));
        }
        $users = $this->Doctores->Users->find('list', ['limit' => 200]);
        $this->set(compact('doctore', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Doctore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctore = $this->Doctores->get($id);
        if ($this->Doctores->delete($doctore)) {
            $this->Flash->success(__('El doctor ha sido eliminado', 'Doctore'));
        } else {
            $this->Flash->error(__('El doctor no pudo ser eliminado. Intente de nuevo', 'Doctore'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
