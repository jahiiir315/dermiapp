<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{
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
        //Listar solos los clientes que coincidan con el usuario logeado
        if($this->Auth->user()['role']==='admin'){
            $clientes = $this->paginate($this->Clientes->find());
        }else{
            $clientes = $this->paginate($this->Clientes->find()->where(['user_id' => $this->Auth->user()['id']]));
        }

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('cliente', $cliente);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            $cliente['user_id'] = $this->Auth->user()["id"];
            
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El {0} ha sido guardado.', 'Cliente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El {0} no pudo ser guardato. Porfavor, intente de nuevo.', 'Cliente'));
        }
        //lista los clientes en la vista agregar
        // $users = $this->Clientes->Users->find('list', ['limit' => 200]);
        // $this->set(compact('cliente', 'users'));
        $this->set(compact('cliente'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            $cliente['user_id'] = $this->Auth->user()["id"];
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El {0} ha sido guardado.', 'Cliente'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El {0} no pudo ser guardado. Intente de nuevo.', 'Cliente'));
        }
        // $users = $this->Clientes->Users->find('list', ['limit' => 200]);
        $this->set(compact('cliente'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('El {0} ha sido eliminado.', 'Cliente'));
        } else {
            $this->Flash->error(__('El {0} no pudo ser eliminado. Intente de nuevo.', 'Cliente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
