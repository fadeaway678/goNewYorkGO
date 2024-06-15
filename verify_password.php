<?php
// Set the correct password
$correct_password = 'JALEN_BRUNSON@GOAT';

// Get the password from the user
$password = $_POST['password'];

// Verify the password
if ($password === $correct_password) {
    // Login successful, redirect to protected page
    header('Location: protected.php');
    exit;
} else {
    echo "Invalid password!";
}
?>
