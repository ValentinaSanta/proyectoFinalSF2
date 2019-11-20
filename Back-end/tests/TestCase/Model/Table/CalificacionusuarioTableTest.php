<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalificacionusuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalificacionusuarioTable Test Case
 */
class CalificacionusuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalificacionusuarioTable
     */
    public $Calificacionusuario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calificacionusuario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Calificacionusuario') ? [] : ['className' => CalificacionusuarioTable::class];
        $this->Calificacionusuario = TableRegistry::getTableLocator()->get('Calificacionusuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calificacionusuario);

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
