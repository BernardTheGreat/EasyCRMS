<?php
App::uses('ClientType', 'Model');

/**
 * ClientType Test Case
 */
class ClientTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_type',
		'app.client_detail',
		'app.client',
		'app.client_contact',
		'app.client_address'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientType = ClassRegistry::init('ClientType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientType);

		parent::tearDown();
	}

}
