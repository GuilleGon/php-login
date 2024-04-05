<?php
session_start();
require_once "config.php";
require_once "functions.php";

$email = sanitize_input($_POST['email']);
$password = sanitize_input($_POST['password']);

if (user_exists($email)) {
    $user = get_user_by_email($email);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("location: dashboard.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}