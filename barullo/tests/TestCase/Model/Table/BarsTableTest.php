<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarsTable Test Case
 */
class BarsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BarsTable
     */
    public $Bars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bars') ? [] : ['className' => 'App\Model\Table\BarsTable'];
        $this->Bars = TableRegistry::get('Bars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bars);

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
