<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoctoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoctoresTable Test Case
 */
class DoctoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoctoresTable
     */
    public $Doctores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Doctores') ? [] : ['className' => DoctoresTable::class];
        $this->Doctores = TableRegistry::getTableLocator()->get('Doctores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doctores);

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
}
