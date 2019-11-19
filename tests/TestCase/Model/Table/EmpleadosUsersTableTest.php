<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadosUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadosUsersTable Test Case
 */
class EmpleadosUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadosUsersTable
     */
    public $EmpleadosUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmpleadosUsers',
        'app.Empleados',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmpleadosUsers') ? [] : ['className' => EmpleadosUsersTable::class];
        $this->EmpleadosUsers = TableRegistry::getTableLocator()->get('EmpleadosUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmpleadosUsers);

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
