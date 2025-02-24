<?php 

namespace App;

class MedianOfTwoSortedArrays
{
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