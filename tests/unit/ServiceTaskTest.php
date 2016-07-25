<?php
namespace Todos\Service;

class ServiceTaskTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testAddAInput1AndBInput2WillReturn3()
    {
        // Arrange
        $except = 3;
        $a = 1;
        $b = 2;
        $target = new Task();

        // Act
        $actual = $target->add($a, $b);

        // Assert
        $this->assertEquals($actual, $except);
    }
}
