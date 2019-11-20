<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacultadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacultadTable Test Case
 */
class FacultadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacultadTable
     */
    public $Facultad;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Facultad'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Facultad') ? [] : ['className' => FacultadTable::class];
        $this->Facultad = TableRegistry::getTableLocator()->get('Facultad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Facultad);

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
