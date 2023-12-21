<?php

namespace Baezeta\Catcher\Utils\Enums;

enum MesesAnyoEnum:string
{
    case JANUARY = 'Enero';
    case FEBRUARY = 'Febrero';
    case MARCH = 'Marzo';
    case APRIL = 'Abril';
    case MAY = 'Mayo';
    case JUNE = 'Junio';
    case JULY = 'Julio';
    case AUGUST = 'Agosto';
    case SEPTEMBER = 'Septiembre';
    case OCTOBER = 'Octubre';
    case NOVEMBER = 'Noviembre';
    case DECEMBER = 'Diciembre';



    public static function name(string $name): mixed
    {
        return constant("self::$name");
    }
}
