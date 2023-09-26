<?php
// Task 1: String Manipulation
$text = "The quick brown fox jumps over the lazy dog.";

function modifyAndPrint($inputText) {
    // Convert the string to all lowercase
    $inputText = strtolower($inputText);
    
    // Replace "brown" with "red"
    $inputText = str_replace('brown', 'red', $inputText);
    
    // Print the modified text
    echo $inputText;
}

modifyAndPrint($text);  // Outputs: the quick red fox jumps over the lazy dog.