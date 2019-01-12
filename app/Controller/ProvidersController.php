<?php
App::uses('AppController', 'Controller');
/**
 * Providers Controller
 *
 * @property Provider $Provider
 * @property PaginatorComponent $Paginator
 */
class ProvidersController extends AppController {

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
		$this->Provider->recursive = 0;
		$this->set('providers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
		$this->set('provider', $this->Provider->find('first', $options));

		$this->loadModel('ProviderMachine');
		$machine_analyzers = $this->ProviderMachine->find('all', array('conditions' => array('ProviderMachine.provider_id' => $id),
			'recursive'=>2
		));

		$this->loadModel('ClientMachineAnalyzer');
		$client_analyzers = $this->ClientMachineAnalyzer->find('all', array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id),
			'recursive'=>2
		));


		$this->set(compact('machine_analyzers','client_analyzers'));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Provider->create();
			if ($this->Provider->save($this->request->data)) {
				$this->Flash->success(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The provider could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Provider->save($this->request->data)) {
				$this->Flash->success(__('The provider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The provider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Provider.' . $this->Provider->primaryKey => $id));
			$this->request->data = $this->Provider->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Provider->exists($id)) {
			throw new NotFoundException(__('Invalid provider'));
		}
		$this->request->allowMethod('post', 'delete', 'get');
		if ($this->Provider->delete($id)) {
			$this->Flash->success(__('The provider has been deleted.'));
		} else {
			$this->Flash->error(__('The provider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
