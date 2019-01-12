<?php
App::uses('AppModel', 'Model');
/**
 * Provider Model
 *
 * @property ClientMachineAnalyzer $ClientMachineAnalyzer
 */
class Provider extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ClientMachineAnalyzer' => array(
			'className' => 'ClientMachineAnalyzer',
			'foreignKey' => 'provider_id',
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
