<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Membresias Controller
 *
 * @property \App\Model\Table\MembresiasTable $Membresias
 *
 * @method \App\Model\Entity\Membresia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MembresiasController extends AppController
{
    public function isAuthorized($user){
        if(isset($user['role']) and $user['role'] === 'admin'){
            if(in_array($this->request->action, ['index','view','add','edit','delete'])){
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
        $membresias = $this->Membresias->find();

        $this->set(compact('membresias'));
    }

    /**
     * View method
     *
     * @param string|null $id Membresia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membresia = $this->Membresias->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('membresia', $membresia);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membresia = $this->Membresias->newEntity();
        if ($this->request->is('post')) {
            $membresia = $this->Membresias->patchEntity($membresia, $this->request->getData());
            if ($this->Membresias->save($membresia)) {
                $this->Flash->success(__('La membresia ha sido guardada', 'Membresia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La membresia no pudo ser guardada. Intente de nuevo', 'Membresia'));
        }
        $users = $this->Membresias->Users->find('list', ['limit' => 200]);
        $this->set(compact('membresia', 'users'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Membresia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membresia = $this->Membresias->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membresia = $this->Membresias->patchEntity($membresia, $this->request->getData());
            if ($this->Membresias->save($membresia)) {
                $this->Flash->success(__('La membresia ha sido guardada', 'Membresia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La membresia no pudo ser guardada. Intente de nuevo', 'Membresia'));
        }
        $users = $this->Membresias->Users->find('list', ['limit' => 200]);
        $this->set(compact('membresia', 'users'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Membresia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membresia = $this->Membresias->get($id);
        if ($this->Membresias->delete($membresia)) {
            $this->Flash->success(__('La amembresia ha sido eliminada', 'Membresia'));
        } else {
            $this->Flash->error(__('La membresia no puso ser eliminada. Intente de nuevo.', 'Membresia'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
