<?php
App::uses('AppController', 'Controller');
/**
 * ClientProducts Controller
 *
 * @property ClientProduct $ClientProduct
 * @property PaginatorComponent $Paginator
 */
class ClientProductsController extends AppController {

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
		$this->ClientProduct->recursive = 0;
		$this->set('clientProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientProduct->exists($id)) {
			throw new NotFoundException(__('Invalid client product'));
		}
		$options = array('conditions' => array('ClientProduct.' . $this->ClientProduct->primaryKey => $id));
		$this->set('clientProduct', $this->ClientProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientProduct->create();
			if ($this->ClientProduct->save($this->request->data)) {
				$this->Flash->success(__('The client product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client product could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientProduct->Client->find('list');
		$products = $this->ClientProduct->Product->find('list');
		$this->set(compact('clients', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientProduct->exists($id)) {
			throw new NotFoundException(__('Invalid client product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientProduct->save($this->request->data)) {
				$this->Flash->success(__('The client product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientProduct.' . $this->ClientProduct->primaryKey => $id));
			$this->request->data = $this->ClientProduct->find('first', $options);
		}
		$clients = $this->ClientProduct->Client->find('list');
		$products = $this->ClientProduct->Product->find('list');
		$this->set(compact('clients', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->ClientProduct->exists($id)) {
			throw new NotFoundException(__('Invalid client product'));
		}
		$this->request->allowMethod('post', 'delete', 'get');
		if ($this->ClientProduct->delete($id)) {
			$this->Flash->success(__('The product has been deleted.'));
		} else {
			$this->Flash->error(__('The client product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller'=>'Clients','action' => 'index'));
	}



	public function edit_installation_details($id = null) {
		$this->loadModel('Client');
		$this->loadModel('Product');
		if (!$this->ClientProduct->exists($id)) {
			throw new NotFoundException(__('Invalid client product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if($this->request->data['ClientProduct']['id'] == $this->ClientProduct->id) {
					if ($this->Client->ClientProduct->save($this->request->data)) {
				        $this->Flash->success(__('The implementation details has been saved.'));
						return $this->redirect(array('controller'=>'Clients','action' => 'index'));
			        }
			} else {
				$this->Flash->error(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientProduct.client_id' => $id));
			$this->request->data = $this->ClientProduct->find('first', $options);
		}


	}
}
