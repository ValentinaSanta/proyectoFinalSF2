<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CargoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CargoTable Test Case
 */
class CargoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CargoTable
     */
    public $Cargo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cargo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cargo') ? [] : ['className' => CargoTable::class];
        $this->Cargo = TableRegistry::getTableLocator()->get('Cargo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cargo);

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
