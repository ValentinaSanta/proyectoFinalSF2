<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\EquiposComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\EquiposComponent Test Case
 */
class EquiposComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\EquiposComponent
     */
    public $Equipos;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Equipos = new EquiposComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipos);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
