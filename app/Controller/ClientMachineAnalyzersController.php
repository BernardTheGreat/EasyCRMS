<?php
App::uses('AppController', 'Controller');
/**
 * ClientMachineAnalyzers Controller
 *
 * @property ClientMachineAnalyzer $ClientMachineAnalyzer
 * @property PaginatorComponent $Paginator
 */
class ClientMachineAnalyzersController extends AppController {

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
		$this->ClientMachineAnalyzer->recursive = 0;
		$this->set('clientMachineAnalyzers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientMachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid client machine analyzer'));
		}
		$options = array('conditions' => array('ClientMachineAnalyzer.' . $this->ClientMachineAnalyzer->primaryKey => $id));
		$this->set('clientMachineAnalyzer', $this->ClientMachineAnalyzer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientMachineAnalyzer->create();
			if ($this->ClientMachineAnalyzer->save($this->request->data)) {
				$this->Flash->success(__('The client machine analyzer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client machine analyzer could not be saved. Please, try again.'));
			}
		}
		$providers = $this->ClientMachineAnalyzer->Provider->find('list');
		$clients = $this->ClientMachineAnalyzer->Client->find('list');
		$machineAnalyzers = $this->ClientMachineAnalyzer->MachineAnalyzer->find('list');
		$laboratorySections = $this->ClientMachineAnalyzer->LaboratorySection->find('list');
		$this->set(compact('providers', 'clients', 'machineAnalyzers', 'laboratorySections'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientMachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid client machine analyzer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientMachineAnalyzer->save($this->request->data)) {
				$this->Flash->success(__('The client machine analyzer has been saved.'));
				return $this->redirect(array('controller'=>'Clients','action' => 'index'));
			} else {
				$this->Flash->error(__('The client machine analyzer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientMachineAnalyzer.' . $this->ClientMachineAnalyzer->primaryKey => $id));
			$this->request->data = $this->ClientMachineAnalyzer->find('first', $options);
		}
		$providers = $this->ClientMachineAnalyzer->Provider->find('list');
		$clients = $this->ClientMachineAnalyzer->Client->find('list');
		$machineAnalyzers = $this->ClientMachineAnalyzer->MachineAnalyzer->find('list');
		$laboratorySections = $this->ClientMachineAnalyzer->LaboratorySection->find('list');
		$this->set(compact('providers', 'clients', 'machineAnalyzers', 'laboratorySections'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ClientMachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid client machine analyzer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClientMachineAnalyzer->delete($id)) {
			$this->Flash->success(__('The client machine analyzer has been deleted.'));
		} else {
			$this->Flash->error(__('The client machine analyzer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
