<?php 

//  1046. Last Stone Weight
/*
You are given an array of integers stones where stones[i] is the weight of the ith stone.

We are playing a game with the stones. On each turn, we choose the heaviest two stones and smash them together. Suppose the heaviest two stones have weights x and y with x <= y. The result of this smash is:

If x == y, both stones are destroyed, and
If x != y, the stone of weight x is destroyed, and the stone of weight y has new weight y - x.
At the end of the game, there is at most one stone left.

Return the smallest possible weight of the left stone. If there are no stones left, return 0.
*/

function stoneWeight(){
    while (true) {
        $stones = [1, 2, 3, 4];

        // $a = array_rand($stones);
        // $b = array_rand($stones);
        $a = $stones[1];
        $b = $stones[1];

        $dataA = $a;
        $dataB = $b;

        $data = array_search($dataA, $stones);
        $key = array_search($dataA, array_keys($stones), true);
        $key2 = array_search($dataB, array_keys($stones),true);
        return $data;
        // if ($dataA == $dataB) {
        //     //
        //     if($key != $key2){
        //         // unset($stones[$key], $stones[$key2]);
        //         $stones = array_values($stones);
        //         // return $stones;
        //         return "hai";
        //     };
        // };
    
    };
}
echo stoneWeight();
?>