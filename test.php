<?php
class GoogleTest extends PHPUnit_Framework_TestCase {

  protected $webDriver;

  public function setUp()
  {
    $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
    $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
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
