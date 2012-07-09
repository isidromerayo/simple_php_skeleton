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
        $service = \Phake::mock('Acme\Service');
        \Phake::when($service)->readTemp()->thenReturn(10)
                                            ->thenReturn(12)
                                            ->thenReturn(14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
        
    }
     
}
