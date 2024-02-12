<?php

function validatePassword($password) {
    $errors = [];

    // Check if the password length is at least 8 characters
    if (strlen($password) < 8) {
        $errors[] = "Password should be at least 8 characters long.";
    }

    // Check if the password contains at least one uppercase letter
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password should contain at least one uppercase letter.";
    }

    // Check if the password contains at least one lowercase letter
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password should contain at least one lowercase letter.";
    }

    // Check if the password contains at least one digit
    if (!preg_match('/\d/', $password)) {
        $errors[] = "Password should contain at least one digit.";
    }

    // Check if the password contains at least one special character
    if (!preg_match('/[^a-zA-Z\d]/', $password)) {
        $errors[] = "Password should contain at least one special character.";
    }

    // Return the list of errors (empty if the password is valid)
    return $errors;
}

// Example usage:
$password = "SecureP@ssword123";
$errors = validatePassword($password);

if (empty($errors)) {
    echo "Password is valid.";
} else {
    echo "Password is not valid. Errors: " . implode(", ", $errors);
}

?>