<?php

require_once __DIR__ . '/../vendor/autoload.php';
use config\facade\Gandalf;
use config\facade\Thorin;
use config\facade\Bilbo;
use config\facade\Thranduil;
use config\facade\Smaug;
use config\facade\Bard;

class Trilogy{

  /* Calling evil static method */
  public function An_Unexpected_Journey()
  {
    $wizard = Gandalf::knownAs('the Grey');
    $dwarfKing = Thorin::knownAs('Oakenshield');
    $burglar = Bilbo::knownAs('the Hobbit');
    return array(
      $wizard,
      $dwarfKing,
      $burglar
    );
  }

  /* Calling another evil static method */
  public function The_Desolation_Of_Smaug()
  {
    $woodElvesKing = Thranduil::knownAs('the Eleven King');
    $fireDragon = Smaug::knownAs('the Magnificent');
    $archer = Bard::knownAs('the Bowman');
    return array(
      $woodElvesKing,
      $fireDragon,
      $archer
    );
  }

}
