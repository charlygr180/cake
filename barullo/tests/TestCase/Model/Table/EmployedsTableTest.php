<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployedsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployedsTable Test Case
 */
class EmployedsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployedsTable
     */
    public $Employeds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employeds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Employeds') ? [] : ['className' => 'App\Model\Table\EmployedsTable'];
        $this->Employeds = TableRegistry::get('Employeds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeds);

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
