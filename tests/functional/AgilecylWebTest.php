<?php
namespace Tests\Functional\Acme;

class AgilecylWebTest extends \PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*googlechrome");
    // $this->setBrowser("*googlechrome");
    $this->setBrowserUrl("http://agilecyl.org/");
  }

  public function testGoAboutPageAndVerifyContent()
  {
    $this->open("/");
    $this->click("link=Acerca de…");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Acerca de… | Agilecyl", $this->getTitle());
    try {
        $this->assertEquals("Acerca de… | Agilecyl", $this->getTitle());
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->assertEquals("Si buscas resultados distintos, no hagas siempre lo mismo",$this->getText("css=strong > em"));
  }
}