<?php 

namespace Tests;

use App\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    public function testTwoSum(): void
    {
        $function = new TwoSum();

        $this->assertEquals([0,1], $function->twoSum([2,7,11,15], 9));

        $this->assertEquals([1,2], $function->twoSum([3,2,4], 6));
        
        $this->assertEquals([0,1], $function->twoSum([3,3], 6));
    }
}


?>