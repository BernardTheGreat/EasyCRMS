<?php
App::uses('AppController', 'Controller');
/**
 * MachineAnalyzers Controller
 *
 * @property MachineAnalyzer $MachineAnalyzer
 * @property PaginatorComponent $Paginator
 */
class MachineAnalyzersController extends AppController {

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
		$this->MachineAnalyzer->recursive = 0;
		$this->set('machineAnalyzers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid machine analyzer'));
		}
		$options = array('conditions' => array('MachineAnalyzer.' . $this->MachineAnalyzer->primaryKey => $id));
		$this->set('machineAnalyzer', $this->MachineAnalyzer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MachineAnalyzer->create();
			if ($this->MachineAnalyzer->save($this->request->data)) {
				$this->Flash->success(__('The machine analyzer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The machine analyzer could not be saved. Please, try again.'));
			}
		}
		$laboratorySections = $this->MachineAnalyzer->LaboratorySection->find('list');
		$this->set(compact('laboratorySections'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid machine analyzer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MachineAnalyzer->save($this->request->data)) {
				$this->Flash->success(__('The machine analyzer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The machine analyzer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MachineAnalyzer.' . $this->MachineAnalyzer->primaryKey => $id));
			$this->request->data = $this->MachineAnalyzer->find('first', $options);
		}
		$laboratorySections = $this->MachineAnalyzer->LaboratorySection->find('list');
		$this->set(compact('laboratorySections'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->MachineAnalyzer->exists($id)) {
			throw new NotFoundException(__('Invalid machine analyzer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MachineAnalyzer->delete($id)) {
			$this->Flash->success(__('The machine analyzer has been deleted.'));
		} else {
			$this->Flash->error(__('The machine analyzer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
