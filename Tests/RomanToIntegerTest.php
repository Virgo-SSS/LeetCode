<?php

namespace Tests;

use App\RomanToInteger;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends TestCase
{
    public function test(): void
    {
        $class = new RomanToInteger();

        $this->assertSame(3, $class->romanToInt('III'));
        $this->assertSame(58, $class->romanToInt('LVIII'));
        $this->assertSame(1994, $class->romanToInt('MCMXCIV'));
    }
}
