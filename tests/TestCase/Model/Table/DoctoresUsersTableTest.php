<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctoresUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctoresUsersTable Test Case
 */
class DoctoresUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctoresUsersTable
     */
    public $DoctoresUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DoctoresUsers',
        'app.Doctores',
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
        $config = TableRegistry::getTableLocator()->exists('DoctoresUsers') ? [] : ['className' => DoctoresUsersTable::class];
        $this->DoctoresUsers = TableRegistry::getTableLocator()->get('DoctoresUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DoctoresUsers);

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
