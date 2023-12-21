<?php

namespace Baezeta\Catcher;

use Reflection;
use ReflectionClass;
use Baezeta\Catcher\Entity\Options;
use Baezeta\Catcher\Factory\Yaml;

class Catcher
{
    private static $exceptions = [
        'Jueves 21 de Diciembre de 2023' =>[
            '620c2b09f6fae9e2f6a7' => [
                'fecha' => 'Jueves 21 de Diciembre de 2023',
                'exception' => 'Exception',
                'message' => 'Message',
                'clase' => 'Clase'
            ]
        ]
    ];

    public static function register($exception, $message)
    {
        $today = day();
        $options = new Options(
            fecha: $today,
            exception: $exception,
            message:$message,
            clase: "null"
        );
        $id = uuid7($today.$exception.$message);
        self::$exceptions[$today][$id] = $options;
        self::dumpYaml();
    }

    public static function getExceptions()
    {
        return self::$exceptions;
    }

    public static function dumpYaml()
    {
        Yaml::dump(self::$exceptions);
    }
}