<?php
// Set the correct password
$correct_password = 'jalen@brunsonGOAT';

// Get the password from the user
$password = $_POST['password'];

// Verify the password
if ($password === $correct_password) {
    // Login successful, wait for 1 second and generate iframe
    sleep(1);
    echo '<iframe src="protected_page.html" width="100%" height="500"></iframe>';
} else {
    echo "Invalid password! Try Again.";
}
?>
