<?php 

/*
Given a signed 32-bit integer x, return x with its digits reversed. 
If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], 
then return 0.

Assume the environment does not allow you to store 64-bit integers (signed or unsigned).

EXAMPLE :
Input: x = 123
Output: 321

Input: x = -123
Output: -321

Input: x = 120
Output: 21


*/


function number(int $param2): string
{
    $param = (string) $param2;
    if(preg_match('(-|0)',$param)){
        $param = str_replace(['0','-'],'', $param);
        
    }
    $val = strrev($param);
    $val2 = preg_match('(-)',$param2) ? '-' : '';
    $val =  $val2.$val;
    return (integer)$val;
    
}

echo number(123);

?>