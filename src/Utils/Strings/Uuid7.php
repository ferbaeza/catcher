<?php

namespace Baezeta\Catcher\Utils\Strings;

class Uuid7
{
    public static function uuid7(string $cadena = null)
    {
        if ($cadena === null)
            $cadena = substr(md5(time()), 0, 16);
        $time = gettimeofday()['sec'];
        return substr(md5($cadena . $time), 0 ,20);
    }

}
