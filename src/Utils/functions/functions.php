<?php

use Baezeta\Catcher\Utils\Date;
use Baezeta\Catcher\Utils\Strings\Uuid7;
use Baezeta\Catcher\Utils\Folders\Directory;


if(!function_exists('hello')) {
    function hello(string $name)
    {
        return "Hello, $name!";
    }
}

if(!function_exists('day')) {
    function day()
    {
        return Date::day();
    }
}

if(!function_exists('uuid7')) {
    function uuid7(string $cadena = null)
    {
        return Uuid7::uuid7($cadena);
    }
}

if(!function_exists('resources')) {
    function resources(string $path = null)
    {
        return Directory::resources($path);
    }

}
