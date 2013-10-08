<?php

namespace Acme;

/**
 * Description of DummyTest
 *
 * @author isidromerayo
 */
class DummyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sayHelloFabien()
    {
        $expected = 'Hello Fabien';
        $actual = Dummy::sayHello('Fabien');
        $this->assertEquals($expected, $actual);
    }
}
