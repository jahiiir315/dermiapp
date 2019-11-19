<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembresiasUsersFixture
 */
class MembresiasUsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'membresia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_inicio' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_fin' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'costo' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_membresias_m_u' => ['type' => 'index', 'columns' => ['membresia_id'], 'length' => []],
            'fk_users_m_u' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_membresias_m_u' => ['type' => 'foreign', 'columns' => ['membresia_id'], 'references' => ['membresias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_users_m_u' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'membresia_id' => 1,
                'user_id' => 1,
                'fecha_inicio' => 1573757325,
                'fecha_fin' => 1573757325,
                'costo' => 1.5
            ],
        ];
        parent::init();
    }
}
