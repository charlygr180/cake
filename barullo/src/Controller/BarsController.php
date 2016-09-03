<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bars Controller
 *
 * @property \App\Model\Table\BarsTable $Bars
 */
class BarsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $bars = $this->paginate($this->Bars);

        $this->set(compact('bars'));
        $this->set('_serialize', ['bars']);
    }

    /**
     * View method
     *
     * @param string|null $id Bar id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bar = $this->Bars->get($id, [
            'contain' => []
        ]);

        $this->set('bar', $bar);
        $this->set('_serialize', ['bar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bar = $this->Bars->newEntity();
        if ($this->request->is('post')) {
            $bar = $this->Bars->patchEntity($bar, $this->request->data);
            if ($this->Bars->save($bar)) {
                $this->Flash->success(__('The bar has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bar'));
        $this->set('_serialize', ['bar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bar = $this->Bars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bar = $this->Bars->patchEntity($bar, $this->request->data);
            if ($this->Bars->save($bar)) {
                $this->Flash->success(__('The bar has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bar'));
        $this->set('_serialize', ['bar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bar = $this->Bars->get($id);
        if ($this->Bars->delete($bar)) {
            $this->Flash->success(__('The bar has been deleted.'));
        } else {
            $this->Flash->error(__('The bar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
