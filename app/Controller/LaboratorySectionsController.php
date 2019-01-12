<?php
App::uses('AppController', 'Controller');
/**
 * LaboratorySections Controller
 *
 * @property LaboratorySection $LaboratorySection
 * @property PaginatorComponent $Paginator
 */
class LaboratorySectionsController extends AppController {

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
		$this->LaboratorySection->recursive = 0;
		$this->set('laboratorySections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LaboratorySection->exists($id)) {
			throw new NotFoundException(__('Invalid laboratory section'));
		}
		$options = array('conditions' => array('LaboratorySection.' . $this->LaboratorySection->primaryKey => $id));
		$this->set('laboratorySection', $this->LaboratorySection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LaboratorySection->create();
			if ($this->LaboratorySection->save($this->request->data)) {
				$this->Flash->success(__('The laboratory section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The laboratory section could not be saved. Please, try again.'));
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
		if (!$this->LaboratorySection->exists($id)) {
			throw new NotFoundException(__('Invalid laboratory section'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LaboratorySection->save($this->request->data)) {
				$this->Flash->success(__('The laboratory section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The laboratory section could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LaboratorySection.' . $this->LaboratorySection->primaryKey => $id));
			$this->request->data = $this->LaboratorySection->find('first', $options);
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
		if (!$this->LaboratorySection->exists($id)) {
			throw new NotFoundException(__('Invalid laboratory section'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LaboratorySection->delete($id)) {
			$this->Flash->success(__('The laboratory section has been deleted.'));
		} else {
			$this->Flash->error(__('The laboratory section could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
