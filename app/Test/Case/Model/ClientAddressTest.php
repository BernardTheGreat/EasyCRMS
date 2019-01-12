<?php
App::uses('ClientAddress', 'Model');

/**
 * ClientAddress Test Case
 */
class ClientAddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_address',
		'app.client_detail',
		'app.client',
		'app.client_contact',
		'app.contact_type',
		'app.client_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientAddress = ClassRegistry::init('ClientAddress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientAddress);

		parent::tearDown();
	}

}
