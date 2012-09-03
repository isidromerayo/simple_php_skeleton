<?php
namespace Acme;

/**
 * Description of DummyTest
 *
 * @author isidromerayo
 */
class TemperatureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function simpleMock()
    {
        $service = \Mockery::mock('Acme\Service');
        $service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
            
}
