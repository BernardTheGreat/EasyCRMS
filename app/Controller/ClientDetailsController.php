<?php
App::uses('AppController', 'Controller');
/**
 * ClientDetails Controller
 *
 * @property ClientDetail $ClientDetail
 * @property PaginatorComponent $Paginator
 */
class ClientDetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientDetail->recursive = 0;
		$this->set('clientDetails', $this->Paginator->paginate());
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientDetail->exists($id)) {
			throw new NotFoundException(__('Invalid client detail'));
		}
		$options = array('conditions' => array('ClientDetail.' . $this->ClientDetail->primaryKey => $id));
		$this->set('clientDetail', $this->ClientDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientDetail->create();
			if ($this->ClientDetail->save($this->request->data)) {
				$this->Flash->success(__('The client detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client detail could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientDetail->Client->find('list');
		$clientTypes = $this->ClientDetail->ClientType->find('list');
		$this->set(compact('clients', 'clientTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientDetail->exists($id)) {
			throw new NotFoundException(__('Invalid client detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientDetail->save($this->request->data)) {
				$this->Flash->success(__('The client detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientDetail.' . $this->ClientDetail->primaryKey => $id));
			$this->request->data = $this->ClientDetail->find('first', $options);
		}
		$clients = $this->ClientDetail->Client->find('list');
		$clientTypes = $this->ClientDetail->ClientType->find('list');
		$clientAddresses = $this->ClientDetail->ClientAddress->find('list');
		$this->set(compact('clients', 'clientTypes', 'clientAddresses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ClientDetail->exists($id)) {
			throw new NotFoundException(__('Invalid client detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ClientDetail->delete($id)) {
			$this->Flash->success(__('The client detail has been deleted.'));
		} else {
			$this->Flash->error(__('The client detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}




	public function getClientPublicHospital() {


		$options['joins'] = array(
		    array('table' => 'users',
		        'alias' => 'User',
		        'type' => 'LEFT',
		        'conditions' => array(
		            'User.id = Client.user_id',
		        )
		    )
		);
		$hospitals = $this->ClientDetail->find('all',  
			array(
				
				'conditions' => array('ClientDetail.client_type_classification_id'=>2)
				
			)
		);
		$this->Log($options);
		$this->set(compact('hospitals','users'));
	}
}
