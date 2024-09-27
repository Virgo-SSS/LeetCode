<?php

namespace Tests;

use App\PalindromeNumber;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends TestCase
{
    public function test_palindrom(): void
    {
        $class = new PalindromeNumber();
        
        $this->assertTrue($class->isPalindrome(121));

        $this->assertFalse($class->isPalindrome(-121));
        $this->assertFalse($class->isPalindrome(10));
        $this->assertTrue($class->isPalindrome(0));
        $this->assertTrue($class->isPalindrome(1));
        $this->assertTrue($class->isPalindrome(232));
    }
}