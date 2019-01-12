<?php
App::uses('AppController', 'Controller');
/**
 * ClientTypeClassifications Controller
 *
 * @property ClientTypeClassification $ClientTypeClassification
 * @property PaginatorComponent $Paginator
 */
class ClientTypeClassificationsController extends AppController {

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
		$this->ClientTypeClassification->recursive = 0;
		$this->set('clientTypeClassifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientTypeClassification->exists($id)) {
			throw new NotFoundException(__('Invalid client type classification'));
		}
		$options = array('conditions' => array('ClientTypeClassification.' . $this->ClientTypeClassification->primaryKey => $id));
		$this->set('clientTypeClassification', $this->ClientTypeClassification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientTypeClassification->create();
			if ($this->ClientTypeClassification->save($this->request->data)) {
				$this->Flash->success(__('The client type classification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client type classification could not be saved. Please, try again.'));
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
		if (!$this->ClientTypeClassification->exists($id)) {
			throw new NotFoundException(__('Invalid client type classification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientTypeClassification->save($this->request->data)) {
				$this->Flash->success(__('The client type classification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client type classification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientTypeClassification.' . $this->ClientTypeClassification->primaryKey => $id));
			$this->request->data = $this->ClientTypeClassification->find('first', $options);
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
		if (!$this->ClientTypeClassification->exists($id)) {
			throw new NotFoundException(__('Invalid client type classification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClientTypeClassification->delete($id)) {
			$this->Flash->success(__('The client type classification has been deleted.'));
		} else {
			$this->Flash->error(__('The client type classification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
