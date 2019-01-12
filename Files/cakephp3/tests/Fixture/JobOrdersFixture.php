<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobOrdersFixture
 *
 */
class JobOrdersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ref_no_1' => ['type' => 'string', 'fixed' => true, 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'ref_no_2' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'product_id' => ['type' => 'smallinteger', 'length' => 4, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'pickup_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'insert_user_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'insert_datetime' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'update_user_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'update_datetime' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'remarks' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_job_orders_products' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'FK_job_orders_users' => ['type' => 'index', 'columns' => ['insert_user_id'], 'length' => []],
            'FK_job_orders_users_2' => ['type' => 'index', 'columns' => ['update_user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'job_order_ref_no_1' => ['type' => 'unique', 'columns' => ['ref_no_1'], 'length' => []],
            'job_order_ref_no_2' => ['type' => 'unique', 'columns' => ['ref_no_2'], 'length' => []],
            'FK_job_orders_products' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_job_orders_users' => ['type' => 'foreign', 'columns' => ['insert_user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_job_orders_users_2' => ['type' => 'foreign', 'columns' => ['update_user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'ref_no_1' => 'Lorem ips',
                'ref_no_2' => 'Lorem ips',
                'product_id' => 1,
                'pickup_date' => '2018-10-28',
                'insert_user_id' => 1,
                'insert_datetime' => '2018-10-28 13:43:31',
                'update_user_id' => 1,
                'update_datetime' => '2018-10-28 13:43:31',
                'remarks' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
