<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryParcelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryParcelsTable Test Case
 */
class DeliveryParcelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryParcelsTable
     */
    public $DeliveryParcels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delivery_parcels',
        'app.deliveries',
        'app.parcels',
        'app.delivery_status',
        'app.delivery_status_reasons',
        'app.delivery_parcels_latest_view',
        'app.delivery_parcels_view'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DeliveryParcels') ? [] : ['className' => DeliveryParcelsTable::class];
        $this->DeliveryParcels = TableRegistry::getTableLocator()->get('DeliveryParcels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeliveryParcels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
