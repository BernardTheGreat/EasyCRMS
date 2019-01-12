<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobOrdersTable Test Case
 */
class JobOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobOrdersTable
     */
    public $JobOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_orders',
        'app.products',
        'app.users',
        'app.delivery_parcels_latest_view',
        'app.delivery_parcels_view',
        'app.parcels',
        'app.parcels_view'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobOrders') ? [] : ['className' => JobOrdersTable::class];
        $this->JobOrders = TableRegistry::getTableLocator()->get('JobOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobOrders);

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
