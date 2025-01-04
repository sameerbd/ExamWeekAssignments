<?php

// Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:


//     1. Count the number of vowels (a, e, i, o, u) in each string.
    
//     2. Reverse each string.
    
//     3. Print the original string and the modified strings along with their vowel counts.
    
    
//     You must use this array of strings:
    
//     $strings = ["Hello", "World", "PHP", "Programming"];
//     Original String: Hello, Vowel Count: 2, Reversed String: olleH

/* The String Array */
$strings = ["Hello", "World", "PHP", "Programming"];

/* A function created using regular expression*/
function vowelsCount($string)
{
    // Case-insensitive match for vowels
    preg_match_all("/[aeiou]/i", $string, $counts);
    return count($counts[0]);
}


foreach($strings as $string){
 echo "Original String: " . $string . "," . " Vowel Count: " . vowelsCount($string) . "," . " Reversed String: " . strrev($string) . "<br>"; 
}