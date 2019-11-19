<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpinionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpinionesTable Test Case
 */
class OpinionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OpinionesTable
     */
    public $Opiniones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Opiniones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Opiniones') ? [] : ['className' => OpinionesTable::class];
        $this->Opiniones = TableRegistry::getTableLocator()->get('Opiniones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Opiniones);

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
