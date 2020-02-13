<?php
namespace Example\Template\Tests;

use \PHPUnit\Framework\TestCase;
use \Example\Template\Example;

/**
 * Tests that the Example class works as expected.
 *
 * @category Tests
 * @package Example\Template\Tests
 * @author Elizabeth Hicks <ehicks@asazi.biz>
 * @copyright 2020
 */
class ExampleTest extends TestCase
{
    /**
     * @var Example $oExample
     */
    private $oExample;

    /**
     * Prepares the environment before running a test.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->oExample = new Example();
    }

    /**
     * Tests that the 'passThru' method works as expected.
     *
     * @test
     * @group regression
     *
     * @return void
     */
    public function testPassThruMethod()
    {
        $aTestParam = array(
            'test' => 'me',
        );
        $aActual = $this->oExample->passThru($aTestParam);
        $this->assertSame($aTestParam, $aActual);
    }

    /**
     * Cleans up the environment after running a test.
     *
     * @return void
     */
    protected function tearDown()
    {
        $this->oExample = null;
        parent::tearDown();
    }
}
