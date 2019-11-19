<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipoTable Test Case
 */
class EquipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipoTable
     */
    public $Equipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Equipo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Equipo') ? [] : ['className' => EquipoTable::class];
        $this->Equipo = TableRegistry::getTableLocator()->get('Equipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipo);

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
