<?php 

/*

You are given two non-empty linked lists representing two non-negative integers. 
The digits are stored in reverse order, and each of their nodes contains a single digit.
 Add the two numbers and return the sum as a linked list.

You may assume the two numbers do not contain any leading zero, except the number 0 itself.

EXAMPLE
Input: l1 = [2,4,3], l2 = [5,6,4]
Output: [7,0,8]
Explanation: 342 + 465 = 807.
*/

function addTwoNumbers(array $l1, array $l2): array
{
    $ListNode3 = [];
    for($i=0;$i<=3;$i++){
        $ListNode3[] .= $l1[$i] + $l2[$i];   
    }
    return $ListNode3;
}

$hasil = addTwoNumbers([2,4,3], [5,6,4]);
print_r($hasil);

?>