<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembresiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembresiasTable Test Case
 */
class MembresiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MembresiasTable
     */
    public $Membresias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Membresias') ? [] : ['className' => MembresiasTable::class];
        $this->Membresias = TableRegistry::getTableLocator()->get('Membresias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Membresias);

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
