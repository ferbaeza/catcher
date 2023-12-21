<?php

namespace Baezeta\Catcher\Utils;

use Baezeta\Catcher\Utils\Enums\MesesAnyoEnum;
use Baezeta\Catcher\Utils\Enums\DiasSemanaEnum;

class Date
{
    public static function day()
    {
        $day = date('l');
        $dayOfWeek = DiasSemanaEnum::name(strtoupper($day))->value;
        $mesAnyo = MesesAnyoEnum::name(strtoupper(date('F')))->value;
        $day = date('d');
        $year = date('Y');

        return  "$dayOfWeek $day de $mesAnyo de $year";
    }


}
