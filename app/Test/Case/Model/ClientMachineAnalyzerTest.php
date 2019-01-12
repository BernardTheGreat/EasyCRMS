<?php
App::uses('ClientMachineAnalyzer', 'Model');

/**
 * ClientMachineAnalyzer Test Case
 */
class ClientMachineAnalyzerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_machine_analyzer',
		'app.provider',
		'app.client',
		'app.user',
		'app.client_detail',
		'app.client_type',
		'app.client_type_classification',
		'app.client_product',
		'app.product',
		'app.machine_analyzer',
		'app.laboratory_section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientMachineAnalyzer = ClassRegistry::init('ClientMachineAnalyzer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientMachineAnalyzer);

		parent::tearDown();
	}

}
