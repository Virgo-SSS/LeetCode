<?php 


function romanToInt($s) {
    $data = [ 
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000
    ];
    
    $str = str_split($s);
    $val = 0;
    foreach($str as $s){
        $val += $data[$s];
    }

    return $val;
    
}

print_r(romanToInt("MCMXCIV"));


?>