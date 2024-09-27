<?php 

namespace App;

// Given an integer x, return true if x is a palindrome, and false otherwise.
 
// Example 1:
// Input: x = 121
// Output: true
// Explanation: 121 reads as 121 from left to right and from right to left.
// Example 2:

// Input: x = -121
// Output: false
// Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
// Example 3:

// Input: x = 10
// Output: false
// Explanation: Reads 01 from right to left. Therefore, it is not a palindrome.
class PalindromeNumber
{
    public function isPalindrome(int $x): bool
    {
        if ($x == 0) return true;

        $exploded = str_split($x);
        $total = count($exploded);

        $palindrome = [];
        for ($i = $total; $i >= 0; $i--) {
            $palindrome[] = $exploded[$i];
        }

        $palindrome = (int) str_replace(",", "", implode(",",$palindrome));

        if($palindrome == $x) return true;

        return false;
    }
}