<?php
session_start();

$valid_email = "user@example.com";
$valid_password = "password123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header('Location: contact.html');
        exit();
    } else {
        header('Location: login.html?error=true');
        exit();
    }
}
?>