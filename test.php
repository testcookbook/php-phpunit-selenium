<?php
class GoogleTest extends PHPUnit_Framework_TestCase {

  protected $webDriver;

  public function setUp()
  {
    $url = "http://localhost:4444/wd/hub";
    $this->webDriver = RemoteWebDriver::create($url, DesiredCapabilities::firefox());
  }

  public function tearDown()
  {
    $this->webDriver->quit();
  }

  protected $url = 'https://www.google.com';

  public function testGoogleHome()
  {
    $this->webDriver->get($this->url);
    $this->assertContains('Google', $this->webDriver->getTitle());
  }

}
?>
