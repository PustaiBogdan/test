<?php

use PHPUnit\Framework\TestCase;

require_once '../class.php'; // Ajustează calea către fișierul clasei Fruit

class FruitTest extends TestCase
{
    public function testReturn5()
    {
        $fruit = new Fruit();
        $this->assertEquals(5, $fruit->return5(), "return5 should return 5");
    }
}
