<?php
namespace Acme;

/**
 * Description of DependencyInjectionTest
 *
 * @author isidromerayo
 */
class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    /*
    public function setUp()
    {
        $this->di = new \Pimple();
        $this->di['param'] = 'value';
    }
     */
    /**
     * @todo
     */
    public function initialParamValue()
    {
        $this->assertEquals('value',$this->di['param']);
    }
    /* @test */
    public function dummy() {
        $this->assertTrue(TRUE);
    }
}