<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeds Controller
 *
 * @property \App\Model\Table\EmployedsTable $Employeds
 */
class EmployedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $employeds = $this->paginate($this->Employeds);

        $this->set(compact('employeds'));
        $this->set('_serialize', ['employeds']);
    }

    /**
     * View method
     *
     * @param string|null $id Employed id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employed = $this->Employeds->get($id, [
            'contain' => []
        ]);

        $this->set('employed', $employed);
        $this->set('_serialize', ['employed']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employed = $this->Employeds->newEntity();
        if ($this->request->is('post')) {
            $employed = $this->Employeds->patchEntity($employed, $this->request->data);
            if ($this->Employeds->save($employed)) {
                $this->Flash->success(__('The employed has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employed could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('employed'));
        $this->set('_serialize', ['employed']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employed id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employed = $this->Employeds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employed = $this->Employeds->patchEntity($employed, $this->request->data);
            if ($this->Employeds->save($employed)) {
                $this->Flash->success(__('The employed has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employed could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('employed'));
        $this->set('_serialize', ['employed']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employed id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employed = $this->Employeds->get($id);
        if ($this->Employeds->delete($employed)) {
            $this->Flash->success(__('The employed has been deleted.'));
        } else {
            $this->Flash->error(__('The employed could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
