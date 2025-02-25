<?php

namespace Tests;

use App\LastStoneWeight;
use PHPUnit\Framework\TestCase;

class LastStoneWeightTest extends TestCase
{
    public function test1(): void
    {
        $class = new LastStoneWeight();
        $result = $class->lastStoneWeight([1,3]);
        $this->assertEquals(2, $result);
    }

    public function test2(): void
    {
        $class = new LastStoneWeight();
        $result = $class->lastStoneWeight([2,7,4,1,8,1]);
        $this->assertEquals(1, $result);
    }

    public function test3(): void
    {
        $class = new LastStoneWeight();
        $result = $class->lastStoneWeight([1]);
        $this->assertEquals(1, $result);
    }

    public function test4(): void
    {
        $class = new LastStoneWeight();
        $result = $class->lastStoneWeight([2,2]);
        $this->assertEquals(0, $result);
    }
}
