<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalificacionservicioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalificacionservicioTable Test Case
 */
class CalificacionservicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalificacionservicioTable
     */
    public $Calificacionservicio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Calificacionservicio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Calificacionservicio') ? [] : ['className' => CalificacionservicioTable::class];
        $this->Calificacionservicio = TableRegistry::getTableLocator()->get('Calificacionservicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Calificacionservicio);

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
