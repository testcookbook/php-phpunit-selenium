<?php
class GoogleTest extends PHPUnit_Framework_TestCase {

  protected $webDriver;

  public function setUp()
  {
    $user = getenv("SAUCEUSER");
    $key = getenv("SAUCEKEY");
    $url = "https://{$user}:{$key}@ondemand.saucelabs.com:443/wd/hub";
    
    $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
    $this->webDriver = RemoteWebDriver::create($url, $capabilities);
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
