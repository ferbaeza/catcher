<?php

namespace Baezeta\Catcher;

use Baezeta\Catcher\Exceptions\NumeroNoEsEnteroException;
use Baezeta\Catcher\Exceptions\SumaException;

class Suma
{
    public function __construct(
        private $a,
        private $b
    ) {
    } 
    
    public function sumar()
    {
        $this->b ='qqqq';
        if(!is_int($this->a))
            throw NumeroNoEsEnteroException::create();
        if(!is_int($this->b))
            throw NumeroNoEsEnteroException::create();


        return  $this->a + $this->b ;
    }
}
