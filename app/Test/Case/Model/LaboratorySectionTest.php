<?php
App::uses('LaboratorySection', 'Model');

/**
 * LaboratorySection Test Case
 */
class LaboratorySectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.laboratory_section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LaboratorySection = ClassRegistry::init('LaboratorySection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LaboratorySection);

		parent::tearDown();
	}

}
