<?php
/**
 * ClientDetail Fixture
 */
class ClientDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'client_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'client_address_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false, 'key' => 'index'),
		'entry_datetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_clients_idx' => array('column' => 'client_id', 'unique' => 0),
			'fk_client_types_idx' => array('column' => 'client_type_id', 'unique' => 0),
			'fk_client_detail_addresses_idx' => array('column' => 'client_address_id', 'unique' => 0)
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
			'client_id' => 1,
			'client_type_id' => 1,
			'client_address_id' => 1,
			'entry_datetime' => '2019-01-03 02:34:23'
		),
	);

}
