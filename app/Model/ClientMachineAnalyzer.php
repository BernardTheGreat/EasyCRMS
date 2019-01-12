<?php
App::uses('AppModel', 'Model');
/**
 * ClientMachineAnalyzer Model
 *
 * @property Provider $Provider
 * @property Client $Client
 * @property MachineAnalyzer $MachineAnalyzer
 * @property LaboratorySection $LaboratorySection
 */
class ClientMachineAnalyzer extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Provider' => array(
			'className' => 'Provider',
			'foreignKey' => 'provider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MachineAnalyzer' => array(
			'className' => 'MachineAnalyzer',
			'foreignKey' => 'machine_analyzer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LaboratorySection' => array(
			'className' => 'LaboratorySection',
			'foreignKey' => 'laboratory_section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
