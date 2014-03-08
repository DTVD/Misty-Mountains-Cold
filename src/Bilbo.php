<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Bilbo{
    /* Evil static method */
    public static function knownAs($name)
    {
        return "Bilbo ".$name;
    }
}

