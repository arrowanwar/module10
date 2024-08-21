<?php

$strings = ["Hello", "World", "PHP", "Programming"];

$vowels = array('a','e','i','o','u','A','E','I','O','U');


foreach($strings as $string) {
    // Reset the counter for each word
    $count_vowels = 0;
    for($i = 0; $i < strlen($string); $i++) {
        if(in_array($string[$i], $vowels)) {
            $count_vowels++;
        }
    }
    $rvs = strrev($string);
    echo "Original String: $string, Vowel Count: $count_vowels, Reversed String: $rvs " .PHP_EOL;
}
?>