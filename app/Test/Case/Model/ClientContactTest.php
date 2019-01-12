<?php
App::uses('ClientContact', 'Model');

/**
 * ClientContact Test Case
 */
class ClientContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_contact',
		'app.contact_type',
		'app.client',
		'app.client_detail',
		'app.client_type',
		'app.client_address'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientContact = ClassRegistry::init('ClientContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientContact);

		parent::tearDown();
	}

}
