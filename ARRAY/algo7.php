<?php

Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.

Examples

"This is an example!" ==> "sihT si na !elpmaxe"

function reverseWords($str) {
  
    $words = explode(' ', $str);
    $result = [];
  
    foreach ($words as $word) {
        $result[] = strrev($word);
    }

  
    return implode(' ', $result);
}
