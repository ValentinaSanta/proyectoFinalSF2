<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioTable Test Case
 */
class UsuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioTable
     */
    public $Usuario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Usuario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Usuario') ? [] : ['className' => UsuarioTable::class];
        $this->Usuario = TableRegistry::getTableLocator()->get('Usuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usuario);

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
