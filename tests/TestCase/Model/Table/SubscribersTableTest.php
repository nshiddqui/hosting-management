<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscribersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscribersTable Test Case
 */
class SubscribersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscribersTable
     */
    protected $Subscribers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Subscribers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subscribers') ? [] : ['className' => SubscribersTable::class];
        $this->Subscribers = $this->getTableLocator()->get('Subscribers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Subscribers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubscribersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
