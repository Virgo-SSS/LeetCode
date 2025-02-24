<?php 

namespace App;

class MedianOfTwoSortedArrays
{
    /**
     * Given two sorted arrays nums1 and nums2 of size m and n respectively, return the median of the two sorted arrays.
     * The overall run time complexity should be O(log (m+n)).
     *
     * Example 1:
     *
     * Input: nums1 = [1,3], nums2 = [2]
     * Output: 2.00000
     * Explanation: merged array = [1,2,3] and median is 2.
     *
     * Example 2:
     *
     * Input: nums1 = [1,2], nums2 = [3,4]
     * Output: 2.50000
     * Explanation: merged array = [1,2,3,4] and median is (2 + 3) / 2 = 2.5.
     */
    public function findMedianSortedArrays($nums1, $nums2): float
    {
        $mergedArray = array_merge($nums1, $nums2);
        sort($mergedArray);

        $n = count($mergedArray);

        if($n % 2 == 0) {
            $firstTH = $n/2;
            $firstTHNumber = $mergedArray[$firstTH - 1];
            $secondTH = ($n/2 + 1);
            $secondTHNumber = $mergedArray[$secondTH - 1];

            $median = ($firstTHNumber + $secondTHNumber )/ 2;
        } else {
            $median = ($n + 1) / 2;
            $median = $mergedArray[$median - 1];
        }

        return $median;
    }
}