<?php 

/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order

EXAMPLE
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
*/
    
function twoSum(array $nums, int $target): array
{
    $arrSize = count($nums) - 1 ;
    for ($i = 0; $i <= $arrSize; $i++){
        for ($j = $i + 1; $j <= $arrSize; $j++){
            if($nums[$j] == $target - $nums[$i]){
                return array($i,$j);
            };
        };
    };
        return null;
    
}
   
$hasil = twoSum([2,7,11,5],9);
print_r($hasil);



?>