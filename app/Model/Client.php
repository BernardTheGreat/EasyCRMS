<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property User $User
 * @property LastUser $LastUser
 * @property ClientContact $ClientContact
 * @property ClientDetail $ClientDetail
 */
class Client extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $validate = array(
		'client_code' => array(
			'uniqueClientCodeRule' => array(
				'rule' => 'isUnique',
				'message' => 'Client Already Registered'
			)
		)
	);
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ClientDetail' => array(
			'className' => 'ClientDetail',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ClientProduct' => array(
			'className' => 'ClientProduct',
			'foreignKey' => 'client_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
