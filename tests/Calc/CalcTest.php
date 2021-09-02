<?php

namespace Test\Calc;

use PHPUnit\Framework\TestCase;
use App\Calc\Calc;

class CalcTest extends TestCase
{
    public function testPlus()
    {
        $calc = new Calc();
        $result = $calc->plus(10, 20);

        $this->assertSame(30, $result);
    }
}
