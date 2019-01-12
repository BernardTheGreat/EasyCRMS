<?php
/**
 * ClientMachineAnalyzer Fixture
 */
class ClientMachineAnalyzerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'provider_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'machine_analyzer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'laboratory_section_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'connectivity_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'external_engineer' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'Provider Engineer'),
		'internal_engineer' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index', 'comment' => 'IT Easy Engineer'),
		'connectivity_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'TCP/IP / Communication Port / File Based', 'charset' => 'latin1'),
		'communication_port' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'TCP / IP Connection', 'charset' => 'latin1'),
		'mi_ip_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mi_driver_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'accepted_reference_range' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'accepted_reference_range_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_client_machine_provider_idx' => array('column' => 'provider_id', 'unique' => 0),
			'fk_client_machine_clients_idx' => array('column' => 'client_id', 'unique' => 0),
			'fk_client_machines_idx' => array('column' => 'machine_analyzer_id', 'unique' => 0),
			'fk_client_machines_users_idx' => array('column' => 'external_engineer', 'unique' => 0),
			'fk_client_machines_internal_engineer_idx' => array('column' => 'internal_engineer', 'unique' => 0),
			'FK_client_machine_sections_idx' => array('column' => 'laboratory_section_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'provider_id' => 1,
			'client_id' => 1,
			'machine_analyzer_id' => 1,
			'laboratory_section_id' => 1,
			'connectivity_date' => '2019-01-10',
			'external_engineer' => 1,
			'internal_engineer' => 1,
			'connectivity_type' => 'Lorem ipsum dolor sit amet',
			'communication_port' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'mi_ip_address' => 'Lorem ipsum dolor sit amet',
			'mi_driver_date' => '2019-01-10',
			'accepted_reference_range' => 'Lorem ipsum dolor sit amet',
			'accepted_reference_range_url' => 'Lorem ipsum dolor sit amet',
			'enabled' => 1
		),
	);

}
