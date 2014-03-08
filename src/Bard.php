<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Bard{
    /* Evil static method */
    public static function knownAs($name)
    {
        return "Bard ".$name;
    }
}

