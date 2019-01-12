<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class ClientsController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		// Allow Clients to register and logout.
		// You should not add the "login" action to allow list. Doing so would
		// cause problems with normal functioning of AuthComponent.
		$this->Auth->allow(['register', 'logout']);
	}
	
	public function login() {



		if ($this->request->is('post')) {
			$client = $this->Auth->identify();
			if ($client) {
				$this->Auth->setUser($client);
				return $this->redirect($this->Auth->redirectUrl());
			}
				$this->Flash->error('Your username or password is incorrect.');
		}

		$this->viewBuilder()->setLayout('clients');

	}

	public function index() {
		$this->loadComponent('Paginator');
		$clients = $this->Paginator->paginate($this->Clients->find());
		$this->set(compact('clients'));

		$name = $this->getRequest()->getSession()->read('Client.username');
		
		$this->set(compact('name'));

	}

	public function edit($id = null) {
		$this->Client->id = $id;
		if (!$this->Client->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Client->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(
			__('The user could not be saved. Please, try again.')
			);
		} else {
			$this->request->data = $this->Client->findById($id);
			unset($this->request->data['Client']['password']);
		}
	}


	public function register() {
		$client = $this->Clients->newEntity(); 
		if ($this->request->is('post')) { 
			$client = $this->Clients->patchEntity($client, 
				$this->request->getData()); 
			if ($this->Clients->save($client)) { 
				$this->Flash->success('It saved'); 
				return $this->redirect(
					['controller' => 'Clients', 'action' => 'login']
				);

			} 
		} 
		$this->set(compact('client'));

		$this->viewBuilder()->setLayout('clients');
	}

	public function logout() {
		$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());

	}

}



?>