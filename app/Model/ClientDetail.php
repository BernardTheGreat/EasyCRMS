<?php
App::uses('AppModel', 'Model');
/**
 * ClientDetail Model
 *
 * @property Client $Client
 * @property ClientType $ClientType
 * @property ClientAddress $ClientAddress
 */
class ClientDetail extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ClientType' => array(
			'className' => 'ClientType',
			'foreignKey' => 'client_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ClientTypeClassification' => array(
			'className' => 'ClientTypeClassification',
			'foreignKey' => 'client_type_classification_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
