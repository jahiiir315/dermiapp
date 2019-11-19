<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Opiniones Controller
 *
 * @property \App\Model\Table\OpinionesTable $Opiniones
 *
 * @method \App\Model\Entity\Opinione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpinionesController extends AppController
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
        $opiniones = $this->paginate($this->Opiniones);

        $this->set(compact('opiniones'));
    }

    /**
     * View method
     *
     * @param string|null $id Opinione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opinione = $this->Opiniones->get($id, [
            'contain' => []
        ]);

        $this->set('opinione', $opinione);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opinione = $this->Opiniones->newEntity();
        if ($this->request->is('post')) {
            $opinione = $this->Opiniones->patchEntity($opinione, $this->request->getData());
            if ($this->Opiniones->save($opinione)) {
                $this->Flash->success(__('The {0} has been saved.', 'Opinione'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Opinione'));
        }
        $this->set(compact('opinione'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Opinione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opinione = $this->Opiniones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opinione = $this->Opiniones->patchEntity($opinione, $this->request->getData());
            if ($this->Opiniones->save($opinione)) {
                $this->Flash->success(__('The {0} has been saved.', 'Opinione'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Opinione'));
        }
        $this->set(compact('opinione'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Opinione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opinione = $this->Opiniones->get($id);
        if ($this->Opiniones->delete($opinione)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Opinione'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Opinione'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
