<?php
App::uses('MachineAnalyzer', 'Model');

/**
 * MachineAnalyzer Test Case
 */
class MachineAnalyzerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.machine_analyzer',
		'app.section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MachineAnalyzer = ClassRegistry::init('MachineAnalyzer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MachineAnalyzer);

		parent::tearDown();
	}

}
