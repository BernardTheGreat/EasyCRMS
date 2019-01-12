<?php
App::uses('ProviderMachine', 'Model');

/**
 * ProviderMachine Test Case
 */
class ProviderMachineTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provider_machine',
		'app.machine_analyzer',
		'app.laboratory_section',
		'app.provider',
		'app.client_machine_analyzer',
		'app.client',
		'app.user',
		'app.client_contact',
		'app.contact_type',
		'app.client_detail',
		'app.client_type',
		'app.client_type_classification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProviderMachine = ClassRegistry::init('ProviderMachine');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProviderMachine);

		parent::tearDown();
	}

}
