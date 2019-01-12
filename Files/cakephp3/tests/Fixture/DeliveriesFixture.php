<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeliveriesFixture
 *
 */
class DeliveriesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ref_no' => ['type' => 'string', 'fixed' => true, 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'messenger_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dispatch_datetime' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dispatch_user_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'update_datetime' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'update_user_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'return_datetime' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'return_user_id' => ['type' => 'smallinteger', 'length' => 3, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'remarks' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_deliveries_messengers' => ['type' => 'index', 'columns' => ['messenger_id'], 'length' => []],
            'FK_deliveries_users' => ['type' => 'index', 'columns' => ['dispatch_user_id'], 'length' => []],
            'FK_deliveries_users_2' => ['type' => 'index', 'columns' => ['return_user_id'], 'length' => []],
            'FK_deliveries_users_3' => ['type' => 'index', 'columns' => ['update_user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'delivery_ref_no' => ['type' => 'unique', 'columns' => ['ref_no'], 'length' => []],
            'FK_deliveries_messengers' => ['type' => 'foreign', 'columns' => ['messenger_id'], 'references' => ['messengers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_deliveries_users' => ['type' => 'foreign', 'columns' => ['dispatch_user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_deliveries_users_2' => ['type' => 'foreign', 'columns' => ['return_user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_deliveries_users_3' => ['type' => 'foreign', 'columns' => ['update_user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'ref_no' => 'Lorem ips',
                'messenger_id' => 1,
                'dispatch_datetime' => '2018-10-28 13:42:08',
                'dispatch_user_id' => 1,
                'update_datetime' => '2018-10-28 13:42:08',
                'update_user_id' => 1,
                'return_datetime' => '2018-10-28 13:42:08',
                'return_user_id' => 1,
                'remarks' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
