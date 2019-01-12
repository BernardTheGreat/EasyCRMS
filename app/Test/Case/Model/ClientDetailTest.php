<?php
App::uses('ClientDetail', 'Model');

/**
 * ClientDetail Test Case
 */
class ClientDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_detail',
		'app.client',
		'app.client_contact',
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
		$this->ClientDetail = ClassRegistry::init('ClientDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientDetail);

		parent::tearDown();
	}

}
