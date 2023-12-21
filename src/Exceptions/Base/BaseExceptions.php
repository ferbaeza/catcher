<?php

namespace Baezeta\Catcher\Exceptions\Base;

use RuntimeException;
use Baezeta\Catcher\Catcher;

abstract class BaseExceptions extends RuntimeException
{
    protected static $messages = [];

    public static function create()
    {
        Catcher::register(static::class, static::$messages[static::class]);
        return new static(static::$messages[static::class]);
    }

}
