<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PricingFeaturesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PricingFeaturesTable Test Case
 */
class PricingFeaturesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PricingFeaturesTable
     */
    protected $PricingFeatures;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PricingFeatures',
        'app.Pricings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PricingFeatures') ? [] : ['className' => PricingFeaturesTable::class];
        $this->PricingFeatures = $this->getTableLocator()->get('PricingFeatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PricingFeatures);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PricingFeaturesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PricingFeaturesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
