<?php 

/*

Given two sorted arrays nums1 and nums2 of size m and n respectively, 
return the median of the two sorted arrays.

EXAMPLE
Input: nums1 = [1,3], nums2 = [2]
Output: 2.00000
Explanation: merged array = [1,2,3] and median is 2.


*/
function findMedianSortedArrays(array $nums1, array $nums2)
{
    $arr = [];
    
    for($i=0;$i<sizeof($nums1);$i++)
    {
        $arr[] .= $nums1[$i];
    }
    for($i=0;$i<sizeof($nums2);$i++)
    {
        $arr[] .= $nums2[$i];
    }
    
    sort($arr);

    $panjang = sizeof($arr);
    $GanjilGenap = $panjang % 2;
    
    if($GanjilGenap == 0){
        $x1 = $panjang / 2;
        $x2 = $x1 + 1;
    
        $hasil = $arr[$x1-1] + $arr[$x2-1];
        $hasil = sprintf("%.5f", $hasil / 2);

    }else {
        $length = sizeof($arr);
        $x = $length + 1;
        $x = $x / 2;
        $hasil = sprintf("%.5f", $arr[$x-1]);
    }
    
    return $hasil;
    
        
        
}
echo findMedianSortedArrays([1,3],[2]);



?>