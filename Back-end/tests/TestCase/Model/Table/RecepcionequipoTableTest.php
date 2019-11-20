<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecepcionequipoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecepcionequipoTable Test Case
 */
class RecepcionequipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RecepcionequipoTable
     */
    public $Recepcionequipo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Recepcionequipo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Recepcionequipo') ? [] : ['className' => RecepcionequipoTable::class];
        $this->Recepcionequipo = TableRegistry::getTableLocator()->get('Recepcionequipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recepcionequipo);

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
