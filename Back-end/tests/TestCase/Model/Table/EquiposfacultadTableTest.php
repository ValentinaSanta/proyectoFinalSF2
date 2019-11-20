<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquiposfacultadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquiposfacultadTable Test Case
 */
class EquiposfacultadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EquiposfacultadTable
     */
    public $Equiposfacultad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Equiposfacultad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Equiposfacultad') ? [] : ['className' => EquiposfacultadTable::class];
        $this->Equiposfacultad = TableRegistry::getTableLocator()->get('Equiposfacultad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equiposfacultad);

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
