<?php
/**
 * ClientContact Fixture
 */
class ClientContactFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'contact_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'contact_person' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 105, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entry_datetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_clients_idx' => array('column' => 'client_id', 'unique' => 0)
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
			'contact_type_id' => 1,
			'client_id' => 1,
			'contact_person' => 'Lorem ipsum dolor sit amet',
			'entry_datetime' => '2019-01-03 02:35:30',
			'enabled' => 1
		),
	);

}
