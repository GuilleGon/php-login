<?php
session_start();
require_once "config.php";
require_once "functions.php";

$name = sanitize_input($_POST['name']);
$email = sanitize_input($_POST['email']);
$password = sanitize_input($_POST['password']);
$role = 'common';

if (!user_exists($name)) {
    $sql = "INSERT INTO users (name, email, password, role) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $role);
    $stmt->execute();
    $user_id = $conn->insert_id;
    $_SESSION['user'] = array(
        'id' => $user_id,
        'name' => $name,
        'email' => $email,
        'role' => $role
    );
    header("location: dashboard.php");
} else {
    echo "User already exists";
}