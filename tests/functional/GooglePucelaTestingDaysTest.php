<?php

namespace Tests\Functional\Acme;

class GooglePucelaTestingDaysTest extends \PHPUnit_Extensions_SeleniumTestCase {

    protected function setUp() {
        $this->setBrowser("*chrome");
        $this->setBrowserUrl("https://www.google.es/");
    }

    public function testMyTestCase() {
        $this->open("/");
        $this->type("id=gbqfq", "pucela testing days");
        // $this->assertEquals("pucela testing days - Buscar con Google", $this->getTitle());
        $this->click("//ol[@id='rso']/li[2]/div/h3/a/em");
        $this->waitForPageToLoad("30000");
        $this->assertEquals("Pucela Testing Days | juanignaciosl", $this->getTitle());
    }

}
