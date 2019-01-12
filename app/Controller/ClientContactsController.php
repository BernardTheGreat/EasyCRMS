<?php
App::uses('AppController', 'Controller');
/**
 * ClientContacts Controller
 *
 * @property ClientContact $ClientContact
 * @property PaginatorComponent $Paginator
 */
class ClientContactsController extends AppController {

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
		$this->ClientContact->recursive = 0;
		$this->set('clientContacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientContact->exists($id)) {
			throw new NotFoundException(__('Invalid client contact'));
		}
		$options = array('conditions' => array('ClientContact.' . $this->ClientContact->primaryKey => $id));
		$this->set('clientContact', $this->ClientContact->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientContact->create();
			if ($this->ClientContact->save($this->request->data)) {
				$this->Flash->success(__('The client contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client contact could not be saved. Please, try again.'));
			}
		}
		$contactTypes = $this->ClientContact->ContactType->find('list');
		$clients = $this->ClientContact->Client->find('list');
		$this->set(compact('contactTypes', 'clients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientContact->exists($id)) {
			throw new NotFoundException(__('Invalid client contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientContact->save($this->request->data)) {
				$this->Flash->success(__('The client contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientContact.' . $this->ClientContact->primaryKey => $id));
			$this->request->data = $this->ClientContact->find('first', $options);
		}
		$contactTypes = $this->ClientContact->ContactType->find('list');
		$clients = $this->ClientContact->Client->find('list');
		$this->set(compact('contactTypes', 'clients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ClientContact->exists($id)) {
			throw new NotFoundException(__('Invalid client contact'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClientContact->delete($id)) {
			$this->Flash->success(__('The client contact has been deleted.'));
		} else {
			$this->Flash->error(__('The client contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
