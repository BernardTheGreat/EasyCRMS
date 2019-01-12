<?php
App::uses('ClientTypeClassification', 'Model');

/**
 * ClientTypeClassification Test Case
 */
class ClientTypeClassificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_type_classification',
		'app.client_detail',
		'app.client',
		'app.user',
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
		$this->ClientTypeClassification = ClassRegistry::init('ClientTypeClassification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientTypeClassification);

		parent::tearDown();
	}

}
