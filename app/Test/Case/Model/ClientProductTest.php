<?php
App::uses('ClientProduct', 'Model');

/**
 * ClientProduct Test Case
 */
class ClientProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_product',
		'app.client',
		'app.user',
		'app.client_contact',
		'app.contact_type',
		'app.client_detail',
		'app.client_type',
		'app.client_type_classification',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientProduct = ClassRegistry::init('ClientProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientProduct);

		parent::tearDown();
	}

}
