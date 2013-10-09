<?php
namespace Acme;

/**
 * Description of DummyTest
 *
 * @author isidromerayo
 */
class TemperatureTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function simpleMockWithPHPUnit()
    {
        $service = $this->getMock('Acme\ServiceInterface', array('readTemp'));
        $service->expects($this->any())
            ->method('readTemp')
            ->will($this->onConsecutiveCalls(10,12,14));
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
    /** @test */
    public function simpleMockWithMockery()
    {
        $service = \Mockery::mock('Acme\Service');
        $service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
            
}
