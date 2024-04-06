<?php
session_start();
require_once "config.php";
require_once "functions.php";

$name = sanitize_input($_POST['name']);
$email = sanitize_input($_POST['email']);
$password = sanitize_input($_POST['password']);

if (!user_exists($name)) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hash);
    $stmt->execute();
    $user_id = $conn->insert_id;
    $_SESSION['user'] = array(
        'id' => $user_id,
        'name' => $name,
        'email' => $email
    );
    header("location: dashboard.php");
} else {
    echo "User already exists";
}