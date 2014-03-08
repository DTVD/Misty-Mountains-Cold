<?php

require_once __DIR__ . '/../vendor/autoload.php';
use orakaro\IoC\core\IoC;
use config\facade\Touchy;

class TrilogyTest extends PHPUnit_Framework_TestCase{
  /**
   * Bootstrap for each test case
   */
  public function setUp()
  {
    /* Wake up lazy loading */
    Touchy::wakeMeUp();
    /* Redefined your desirable mock */
    IoC::register('Gandalf_knownAs', function($name){
      return 'Radagast the Brown';
    });
    /* Redefined your desirable mock */
    IoC::register('Smaug_knownAs', function($name){
      return 'Smaug the Golden';
    });
  }

  /**
     * Ending for each test case
   */
  public function tearDown()
  {
  }

  /**
   * test An_Unexpected_Journey method
   */
  public function test_An_Unexpected_Journey()
  {
    $t = new Trilogy;
    $desirable = array (
      'Radagast the Brown',
      'Thorin Oakenshield',
      'Bilbo the Hobbit'
    );
    $this->assertSame($desirable, $t->An_Unexpected_Journey());
  }
  /**
   * test The_Desolation_Of_Smaug method
   */
  public function test_The_Desolation_Of_Smaug()
  {
    $t = new Trilogy;
    $desirable = array (
      'Thranduil the Eleven King',
      'Smaug the Golden',
      'Bard the Bowman'
    );
    $this->assertSame($desirable, $t->The_Desolation_Of_Smaug());
  }

}

