<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembresiasUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembresiasUsersTable Test Case
 */
class MembresiasUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MembresiasUsersTable
     */
    public $MembresiasUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MembresiasUsers',
        'app.Membresias',
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
        $config = TableRegistry::getTableLocator()->exists('MembresiasUsers') ? [] : ['className' => MembresiasUsersTable::class];
        $this->MembresiasUsers = TableRegistry::getTableLocator()->get('MembresiasUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MembresiasUsers);

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
