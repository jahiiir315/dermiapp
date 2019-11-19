<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientesUsersTable Test Case
 */
class ClientesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientesUsersTable
     */
    public $ClientesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ClientesUsers',
        'app.Users',
        'app.Clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClientesUsers') ? [] : ['className' => ClientesUsersTable::class];
        $this->ClientesUsers = TableRegistry::getTableLocator()->get('ClientesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientesUsers);

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
