<?php
// Task 4: Multidimensional Array
$grades = array(85, 92, 78, 88, 95);

function sortAndPrint($gradesArray) {
    // Sort the array in descending order
    rsort($gradesArray);
    
    // Print the sorted array
    print_r($gradesArray);
}

sortAndPrint($grades);