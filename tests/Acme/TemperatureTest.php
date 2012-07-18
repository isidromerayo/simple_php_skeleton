<?php
namespace Acme;

class TemperatureTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @test
   */
  public function simpleMock()
  {
    $service = $this->getMock('\Acme\Service', array('readTemp'));

    $service->expects($this->any())
            ->method('readTemp')
            ->will($this->onConsecutiveCalls(10,12,14));
    $temperature = new Temperature($service);
    $this->assertEquals(12, $temperature->average());
  }
}
