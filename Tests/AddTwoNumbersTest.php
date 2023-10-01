<?php 

namespace Tests;

use App\AddTwoNumbers\AddTwoNumber;
use App\AddTwoNumbers\ListNode;
use PHPUnit\Framework\TestCase;

class AddTwoNumbersTest extends TestCase
{
    public function AddTwoNumbers(array $list_array1, array $list_array2): array
    {
        $class = new AddTwoNumber();

        $list_fake_head = new ListNode(0);
        $list_node_1 = $list_fake_head;
        
        foreach($list_array1 as $key => $value) {
            $list_node_1->next = new ListNode($value);
            $list_node_1 = $list_node_1->next;
        }

        $list_fake_head2 = new ListNode(0);
        $list_node_2 = $list_fake_head2;
        foreach($list_array2 as $value) {
            $list_node_2->next = new ListNode($value);
            $list_node_2 = $list_node_2->next;
        }

        $result = $class->addTwoNumbers($list_fake_head->next, $list_fake_head2->next);

        while ($result != null) {
            $result_array[] = $result->val;
            $result = $result->next;
        }

        return $result_array;
    }

    public function testCase1(): void
    {
        $list_array1 = [2,4,3];
        $list_array2 = [5,6,4];

        $result = $this->AddTwoNumbers($list_array1, $list_array2);

        $this->assertEquals([7,0,8], $result);
    }

    public function testCase2(): void
    {
        $list_array1 = [0];
        $list_array2 = [0];

        $result = $this->AddTwoNumbers($list_array1, $list_array2);

        $this->assertEquals([0], $result);
    }

    public function testCase3(): void
    {
        $list_array1 = [9,9,9,9,9,9,9];
        $list_array2 = [9,9,9,9];

        $result = $this->AddTwoNumbers($list_array1, $list_array2);

        $this->assertEquals([8,9,9,9,0,0,0,1], $result);
    }

    public function testCase4(): void
    {
        $list_array1 = [1,2,3,4,5];
        $list_array2 = [9,9];

        $result = $this->AddTwoNumbers($list_array1, $list_array2);

        $this->assertEquals([0,2,4,4,5], $result);
    }
}


?>