<?php 

namespace Tests;

use App\LongestSubstringWithoutRepeatingCharacters;
use PHPUnit\Framework\TestCase;

class LongestSubtringWithoutRepeatingCharactersTest extends TestCase
{
    /** @test */
    public function it_returns_0_for_empty_string()
    {
        $longestSubstringWithoutRepeatingCharacters = new LongestSubstringWithoutRepeatingCharacters();
        $this->assertEquals(0, $longestSubstringWithoutRepeatingCharacters->lengthOfLongestSubstring('abcabcbb'));
    }
}

?>