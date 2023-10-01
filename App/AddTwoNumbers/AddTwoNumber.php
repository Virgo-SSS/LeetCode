<?php 

namespace App\AddTwoNumbers;

use App\AddTwoNumbers\ListNode;

/*
    You are given two non-empty linked lists representing two non-negative integers. 
    The digits are stored in reverse order, and each of their nodes contains a single digit.
    Add the two numbers and return the sum as a linked list.

    You may assume the two numbers do not contain any leading zero, except the number 0 itself.

    EXAMPLE 1
    Input: l1 = [2,4,3], l2 = [5,6,4]
    Output: [7,0,8]
    Explanation: 342 + 465 = 807.

    Example 2:
    Input: l1 = [0], l2 = [0]
    Output: [0]

    Example 3:
    Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
    Output: [8,9,9,9,0,0,0,1]

    Constraints:

    - The number of nodes in each linked list is in the range [1, 100].
    - 0 <= Node.val <= 9
    - It is guaranteed that the list represents a number that does not have leading zeros.
*/


/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

 

class AddTwoNumber
{
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        // create a fake node to store the result
        $result_node = new ListNode(0);

        // create a pointer to the result node
        $result = $result_node;

        // create a variable to store the left value after modulo 10
        $left = 0;

        while ($l1 != null || $l2 != null) {

            // default sum is 0
            $sum = 0;

            // if l1 or l2 is not null, add the value to sum
            if($l1 != null) {
                // add the value to sum
                $sum += $l1->val;

                // set the node to the next node
                $l1 = $l1->next;
            }

            // if l2 is not null, add the value to sum
            if($l2 != null) {
                // add the value to sum
                $sum += $l2->val;
                // set the node to the next node
                $l2 = $l2->next;
            }

            // check if there is a left value from calculation before
            if($left > 0) {
                // add the left value to sum
                $sum += $left;

                // reset the left value to 0
                $left = 0;
            }

            // check if the sum is more than 9
            if($sum > 9) {
                // module the sum by 10 ex : 13 % 10 = 3, 12 % 10 = 2, 15 % 10 = 5
                $sum = $sum % 10;
                // set the left value to 1, because the node in Constraints: 0 <= Node.val <= 9, so the left value will be 1 because the max value is 9 + 9 = 18 (1 left and 8 as the value)
                $left = 1;
            }

            // create a new node with the sum value and set the next node to the result
            $result->next = new ListNode($sum);

            // set the result to the next node
            $result = $result->next;
        }

        // check if there is a left value from calculation before
        if($left > 0) {
            // add the left value to the result
            $result->next = new ListNode($left);
        }

        return $result_node->next;
    }
}

?>