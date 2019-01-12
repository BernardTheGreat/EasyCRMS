<?php
App::uses('AppController', 'Controller');
/**
 * ProviderMachines Controller
 *
 * @property ProviderMachine $ProviderMachine
 * @property PaginatorComponent $Paginator
 */
class ProviderMachinesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProviderMachine->recursive = 0;
		$this->set('providerMachines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProviderMachine->exists($id)) {
			throw new NotFoundException(__('Invalid provider machine'));
		}
		$options = array('conditions' => array('ProviderMachine.' . $this->ProviderMachine->primaryKey => $id));
		$this->set('providerMachine', $this->ProviderMachine->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProviderMachine->create();
			if ($this->ProviderMachine->save($this->request->data)) {
				$this->Flash->success(__('The provider machine has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The provider machine could not be saved. Please, try again.'));
			}
		}
		$machineAnalyzers = $this->ProviderMachine->MachineAnalyzer->find('list');
		$providers = $this->ProviderMachine->Provider->find('list');
		$this->set(compact('machineAnalyzers', 'providers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProviderMachine->exists($id)) {
			throw new NotFoundException(__('Invalid provider machine'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProviderMachine->save($this->request->data)) {
				$this->Flash->success(__('The provider machine has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The provider machine could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProviderMachine.' . $this->ProviderMachine->primaryKey => $id));
			$this->request->data = $this->ProviderMachine->find('first', $options);
		}
		$machineAnalyzers = $this->ProviderMachine->MachineAnalyzer->find('list');
		$providers = $this->ProviderMachine->Provider->find('list');
		$this->set(compact('machineAnalyzers', 'providers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ProviderMachine->exists($id)) {
			throw new NotFoundException(__('Invalid provider machine'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProviderMachine->delete($id)) {
			$this->Flash->success(__('The provider machine has been deleted.'));
		} else {
			$this->Flash->error(__('The provider machine could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
