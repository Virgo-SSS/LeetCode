<?php

namespace Tests;

use App\MedianOfTwoSortedArrays;
use PHPUnit\Framework\TestCase;

class MedianOfTwoSortedArraysTest extends TestCase
{
    public function testOdd(): void
    {
        $nums1 = [1,3];
        $nums2 = [2];
        $class = new MedianOfTwoSortedArrays();
        $median = $class->findMedianSortedArrays($nums1, $nums2);

        $this->assertEquals(2, $median);
    }

    public function testEven(): void
    {
        $nums1 = [1,3];
        $nums2 = [2,4];
        $class = new MedianOfTwoSortedArrays();
        $median = $class->findMedianSortedArrays($nums1, $nums2);

        $this->assertEquals(2.5, $median);
    }

    public function testZero(): void
    {
        $nums1 = [0,0];
        $nums2 = [0,0];
        $class = new MedianOfTwoSortedArrays();
        $median = $class->findMedianSortedArrays($nums1, $nums2);

        $this->assertEquals(0, $median);
    }

}
