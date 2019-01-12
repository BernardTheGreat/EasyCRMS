<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeliveryParcelsFixture
 *
 */
class DeliveryParcelsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'delivery_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'parcel_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'delivery_status_id' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'delivery_status_reason_id' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => true, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'status_remarks' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'FK_delivery_parcels_deliveries' => ['type' => 'index', 'columns' => ['delivery_id'], 'length' => []],
            'FK_delivery_parcels_parcels' => ['type' => 'index', 'columns' => ['parcel_id'], 'length' => []],
            'FK_delivery_parcels_delivery_status' => ['type' => 'index', 'columns' => ['delivery_status_id'], 'length' => []],
            'FK_delivery_parcels_delivery_status_reasons' => ['type' => 'index', 'columns' => ['delivery_status_reason_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'delivery_id' => ['type' => 'unique', 'columns' => ['delivery_id', 'parcel_id'], 'length' => []],
            'FK_delivery_parcels_deliveries' => ['type' => 'foreign', 'columns' => ['delivery_id'], 'references' => ['deliveries', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'FK_delivery_parcels_delivery_status' => ['type' => 'foreign', 'columns' => ['delivery_status_id'], 'references' => ['delivery_status', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_delivery_parcels_delivery_status_reasons' => ['type' => 'foreign', 'columns' => ['delivery_status_reason_id'], 'references' => ['delivery_status_reasons', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_delivery_parcels_parcels' => ['type' => 'foreign', 'columns' => ['parcel_id'], 'references' => ['parcels', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'delivery_id' => 1,
                'parcel_id' => 1,
                'delivery_status_id' => 1,
                'delivery_status_reason_id' => 1,
                'status_remarks' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
