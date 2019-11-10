<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesoresTable Test Case
 */
class ProfesoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesoresTable
     */
    public $Profesores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Profesores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Profesores') ? [] : ['className' => ProfesoresTable::class];
        $this->Profesores = TableRegistry::getTableLocator()->get('Profesores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profesores);

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
