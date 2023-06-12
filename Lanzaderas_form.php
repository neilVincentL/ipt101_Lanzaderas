<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request method.');
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Print first name and last name
echo "First Name: $firstname<br>";
echo "Last Name: $lastname<br>";

// Print email
echo "Email: $email<br>";

// Count characters in password
$password_length = strlen($password);
echo "Password Length: $password_length<br>";

// Check if password and confirm password match
if ($password !== $confirm_password) {
    echo "Password and Confirm Password do not match.";
}

?>