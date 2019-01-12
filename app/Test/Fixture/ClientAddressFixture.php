<?php
/**
 * ClientAddress Fixture
 */
class ClientAddressFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'address_one' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 105, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address_two' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 105, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address_three' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 105, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entry_datetime' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'address_one' => 'Lorem ipsum dolor sit amet',
			'address_two' => 'Lorem ipsum dolor sit amet',
			'address_three' => 'Lorem ipsum dolor sit amet',
			'remarks' => 'Lorem ipsum dolor sit amet',
			'entry_datetime' => '2019-01-03 06:39:14',
			'enabled' => 1
		),
	);

}
