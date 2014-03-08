<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Gandalf{
    /* Evil static method */
    public static function knownAs($name)
    {
        return "Gandalf ".$name;
    }
}

