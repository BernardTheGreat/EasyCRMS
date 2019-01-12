<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 * @property PaginatorComponent $Paginator
 */
class ClientsController extends AppController {

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
		$this->Client->recursive = 0;
		$this->set('clients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
		$this->set('client', $this->Client->find('first', $options));


		$this->loadModel('ClientMachineAnalyzer');
		$client_analyzers = $this->ClientMachineAnalyzer->find('all', array('conditions' => array('Client.' . $this->Client->primaryKey => $id),
			'recursive'=>2
		));
		$this->set(compact('client_analyzers'));
		

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('ClientDetail');
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
					$this->Client->saveField('entry_datetime', date('Y-m-d H:i:s'));
					$this->request->data['ClientDetail']['client_id'] = $this->Client->id;
					$this->Client->ClientDetail->save($this->request->data, array('validate' => 'only'));
				$this->Flash->success(__('The client has been saved.'));
				return $this->redirect(array('action' => 'index'));
				
			} else {
				$this->Flash->error(__('The client could not be saved. Please, try again.'));
			}
		}

		$this->loadModel('ClientDetail');
		$this->loadModel('ClientMachineAnalyzer');
		$this->loadModel('ClientType');
		$this->loadModel('ClientTypeClassification');
		$clients = $this->Client->ClientDetail->find('all');
		$client_machines = $this->ClientMachineAnalyzer->Client->find('all');
		$client_types = $this->ClientType->find('list');
		$client_type_classifications = $this->ClientTypeClassification->find('list');
		$this->set(compact('clients', 'client_machines', 'client_types', 'client_type_classifications'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {



		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Client->save($this->request->data)) {
				if($this->request->data['ClientDetail']['client_id'] == $id) {
			        $this->Client->ClientDetail->save($this->request->data);
		        }
				$this->Flash->success(__('The client has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The client could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
			$this->request->data = $this->Client->find('first', $options);
		
		}

		/* Client Information */
		$this->Client->User->virtualFields = array(
		    'full_name' => "CONCAT(User.first_name, ' ', User.last_name)"
		);
		$users = $this->Client->User->find("list", array(
		    "fields" => array(
		        "User.full_name"
		    )
		));


		$clients = $this->Client->find('all', array('conditions' => array('Client.' . $this->Client->primaryKey => $id))); 
		
		$this->loadModel('ClientDetail');
		$this->loadModel('ClientType');
		$this->loadModel('ClientTypeClassification');
		$this->loadModel('ClientMachineAnalyzer');
		
		$client_type_values = $this->ClientType->find('list');


		$client_type = $this->ClientDetail->find('list', array(
			'conditions'=> array(
				'ClientDetail.client_id' => $id
			),
			'fields'=> array(
				'ClientDetail.client_type_id'
			),
			'recursive'=>2
		));


		$client_type_classification_values = $this->ClientTypeClassification->find('list');


		$client_type_classification = $this->ClientDetail->find('list', array(
			'conditions'=> array(
				'ClientDetail.client_id' => $id
			),
			'fields'=> array(
				'ClientDetail.client_type_classification_id'
			),
			'recursive'=>2
		));


		/* Client Information */

		/* Implementation Details - Product Information */

		$this->loadModel('ClientProduct');
		$this->loadModel('Product');
		$client_products = $this->Client->ClientProduct->find('all', array('conditions'=>array('ClientProduct.client_id'=>$id)));

		
		$products = $this->Product->find('all');

		$product_info = array();
		foreach($products as $key=>$product_values)
		{
			$product_info[$product_values['Product']['id']] = $product_values['Product']['name'];
		}

		/* Implementation Details - Product Information */

		/* Implementation Details - Laboratory Information */

		$client_laboratory_info = $this->ClientDetail->find('all', array('conditions'=>array('ClientDetail.client_id'=>$id)));

		/* Implementation Details - Laboratory Information */


		/* Implementation Details - Machine Analyzers */
		
		$client_machine_analyzers = $this->ClientMachineAnalyzer->find('all', array('conditions'=>array('ClientMachineAnalyzer.client_id' => $id)));

		

		/* Implementation Details - Machine Analyzers */

		$this->set(compact('users', 'clients', 'client_type_values', 'client_type_classification_values', 'client_type', 'client_type_classification', 'products','client_products','product_info','client_laboratory_info', 'client_machine_analyzers'));

	}


	public function edit_installation_details($id = null) {
		$this->loadModel('ClientProduct');
		$this->loadModel('Product');

		$client_products = $this->ClientProduct->find('all', array(
			'conditions'=>array(
				'ClientProduct.client_id'=>$id),
			'fields'=>array(
				'ClientProduct.id')
		));

		foreach($client_products as $client_product_values) {
			$client_product_id = $client_product_values;
		}


		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Client->ClientProduct->save($this->request->data)) {
				if($this->request->data['ClientProduct']['client_id'] == $this->Client->id) {
				    $this->Flash->success(__('The implementation details has been saved.'));
			    }
				return $this->redirect(array('controller'=>'Clients','action' => 'index'));
			} else {
				$this->Flash->error(__('The client could not be saved. Please, try again.'));
				return $this->redirect($this->referer());
			}
		} else {
			$options = array('conditions' => array('ClientProduct.client_id' => $id));
			$this->request->data = $this->ClientProduct->find('all', $options);
		}



	}

	public function edit_documentations($id = null) {
		$this->loadModel('ClientDetail');

		$documentations = $this->ClientDetail->find('all');


	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('Invalid client'));
		}
		$this->request->allowMethod('post', 'delete', 'get');
		if ($this->Client->delete($id)) {
			$this->Flash->success(__('The client has been deleted.'));
		} else {
			$this->Flash->error(__('The client could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function get_hospitals() {

		$this->loadModel('ClientDetail');
		
		/* Private Hospitals */
		$private_hospitals = $this->ClientDetail->find('all', array(
			'conditions' => array(
				'ClientDetail.client_type_classification_id'=>2,
				'ClientDetail.client_type_id'=>2
			), 
			'recursive'=>2
		));
		$this->set(compact('private_hospitals'));
		/* Private Hospitals */


		/* Public Hospitals */
		$public_hospitals = $this->ClientDetail->find('all', array(
			'conditions' => array(
				'ClientDetail.client_type_classification_id'=>2,
				'ClientDetail.client_type_id'=>1
			), 
			'recursive'=>2
		));

		$this->set(compact('public_hospitals'));
		/* Public Hospitals */
	}

	public function get_clinics() {
		$this->loadModel('ClientDetail');
		

		/* Private Clinics */
		$private_clinics = $this->ClientDetail->find('all', array(
			'conditions' => array(
				'ClientDetail.client_type_classification_id'=>1,
				'ClientDetail.client_type_id'=>2
			), 
			'recursive'=>2
		));
		$this->set(compact('private_clinics'));
		/* Private Clinics */


		/* Public Clinics */
		$public_clinics = $this->ClientDetail->find('all', array(
			'conditions' => array(
				'ClientDetail.client_type_classification_id'=>1,
				'ClientDetail.client_type_id'=>1
			), 
			'recursive'=>2
		));
		$this->set(compact('public_clinics'));
		/* Public Clinics */
	}


	

}
