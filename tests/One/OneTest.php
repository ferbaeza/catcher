<?php

namespace Tests\One;

use Baezeta\Catcher\Suma;
use PHPUnit\Framework\TestCase;

class OneTest extends TestCase
{
    public function testOne(): void
    {
        $fun = hello("Mundo");
        $this->assertEquals("Hello, Mundo!", $fun);
    }

    /**
     * @test
     */
    public function comprobando_como_invocar_la_clase()
    {
        $suma = new Suma(1, 2);
        $this->assertEquals(3, $suma->sumar());
    }
}
