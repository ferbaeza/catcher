<?php

namespace Baezeta\Catcher\Utils\Enums;

enum DiasSemanaEnum:string
{
    case MONDAY = 'Lunes';
    case TUESDAY = 'Martes';
    case WEDNESDAY = 'Miércoles';
    case THURSDAY = 'Jueves';
    case FRIDAY = 'Viernes';
    case SATURDAY = 'Sábado';
    case SUNDAY = 'Domingo';

    public static function name(string $name): mixed
    {
        return constant("self::$name");
    }
}
