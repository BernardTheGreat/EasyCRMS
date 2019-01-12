<?php
App::uses('AppModel', 'Model');
/**
 * ClientType Model
 *
 * @property ClientDetail $ClientDetail
 */
class ClientType extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ClientDetail' => array(
			'className' => 'ClientDetail',
			'foreignKey' => 'client_type_id',
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
