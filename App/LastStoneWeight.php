<?php

namespace App;

//  Last Stone Weight
/*
You are given an array of integers stones where stones[i] is the weight of the ith stone.

We are playing a game with the stones. On each turn, we choose the heaviest two stones and smash them together. Suppose the heaviest two stones have weights x and y with x <= y. The result of this smash is:

If x == y, both stones are destroyed, and
If x != y, the stone of weight x is destroyed, and the stone of weight y has new weight y - x.
At the end of the game, there is at most one stone left.

Return the smallest possible weight of the left stone. If there are no stones left, return 0.
*/
class LastStoneWeight
{
    /**
     * @param Integer[] $stones
     * @return Integer
     */
    public function lastStoneWeight(array $stones): int
    {
        // we will use Heap Data structure

        $heap = new \SplMaxHeap();

        // insert all stone to heap node
        foreach($stones as $stone) {
            $heap->insert($stone);
        }

        while($heap->count() > 1) {
            // because php automatically put the largest node at root so we can extract it
            // remember, "extract() mean remove the node from the tree and get the value"
            $y = $heap->extract(); // largest stone
            $x = $heap->extract(); // second-largest stone


            // if the stone is not same we will insert calculated stone
            if($y != $x) {
                $heap->insert($y - $x);
            }
        }

        return $heap->isEmpty() ? 0 : $heap->extract();
    }

    /**
     * Below code is not good because it takes 3ms to run.
     */
//    public function lastStoneWeight(array $stones): int
//    {
//        while(count($stones) > 1) {
//            var_dump("start");
//
//            sort($stones);
//            $totalOfStones = count($stones);
//            $x = $stones[$totalOfStones - 2];
//            $y = $stones[$totalOfStones - 1];
//            if ($x != $y); {
//                $stones = array_replace($stones, [$totalOfStones - 1 => $y - $x]);
//                array_splice($stones, $totalOfStones - 2, 1);
//            }
//
//            if($x == $y){
//                array_splice($stones, $totalOfStones - 1, 1);
//                array_splice($stones, $totalOfStones - 2, 1);
//            }
//        }
//
//        return $stones[0] ?? 0;
//    }

}