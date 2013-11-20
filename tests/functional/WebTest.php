<?php
namespace Tests\Functional\Acme;
/**
 * Test with Selenium
 */ 
class WebTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        // Selenium RC
        $this->setHost('localhost');
        $this->setPort(4444);
        // Browser
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('https://github.com/');
    }

    public function testTitle()
    {
        $this->url('isidromerayo/simple_php_skeleton');
        $title = $this->title();
        $this->assertEquals('isidromerayo/simple_php_skeleton · GitHub', $title);
    }
}