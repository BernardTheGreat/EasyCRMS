<?php
App::uses('AppModel', 'Model');
/**
 * ProviderMachine Model
 *
 * @property MachineAnalyzer $MachineAnalyzer
 * @property Provider $Provider
 */
class ProviderMachine extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MachineAnalyzer' => array(
			'className' => 'MachineAnalyzer',
			'foreignKey' => 'machine_analyzer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'provider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
