<?php

namespace Baezeta\Catcher\Exceptions;

use Baezeta\Catcher\Exceptions\Base\BaseExceptions;


class NumeroException extends BaseExceptions
{
    protected static $messages = [
        NumeroNoEsEnteroException::class => 'numero_no_es_un_entero_domain_exception_000',
    ];
}
