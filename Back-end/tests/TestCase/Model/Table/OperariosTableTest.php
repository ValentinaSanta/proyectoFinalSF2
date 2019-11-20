<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OperariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OperariosTable Test Case
 */
class OperariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OperariosTable
     */
    public $Operarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Operarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Operarios') ? [] : ['className' => OperariosTable::class];
        $this->Operarios = TableRegistry::getTableLocator()->get('Operarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Operarios);

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
