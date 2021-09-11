<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PricingTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PricingTable Test Case
 */
class PricingTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PricingTable
     */
    protected $Pricing;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pricing',
        'app.PricingFeatures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pricing') ? [] : ['className' => PricingTable::class];
        $this->Pricing = $this->getTableLocator()->get('Pricing', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pricing);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PricingTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getPricing method
     *
     * @return void
     * @uses \App\Model\Table\PricingTable::getPricing()
     */
    public function testGetPricing(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
