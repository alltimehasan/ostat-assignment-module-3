<?php
// Task 5: Password Generator
function generatePassword($length) {
    // Define possible characters for the password
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialCharacters = '!@#$%^&*()_+';
    
    // Combine all the characters together
    $allCharacters = $lowercase . $uppercase . $numbers . $specialCharacters;

    // Length of the combined characters string
    $allCharactersLength = strlen($allCharacters);

    // Initialize the password variable
    $password = '';

    // Loop until we reach the desired password length
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from the allCharacters string and append it to the password
        $randomIndex = rand(0, $allCharactersLength - 1);
        $password .= $allCharacters[$randomIndex];
    }

    return $password;
}

// Generate and print a password of length 12
$password = generatePassword(12);
echo "Generated Password: " . $password;