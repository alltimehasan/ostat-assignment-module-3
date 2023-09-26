<?php
// Task 2: Array Manipulation
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function removeEvenNumbers($arr) {
    // Filter the array to remove even numbers
    $result = array_filter($arr, function($value) {
        return $value % 2 !== 0; // return true for odd numbers, false for even numbers
    });
    
    // Print the resulting array
    print_r($result);
}

removeEvenNumbers($numbers);