<?php
session_start();
require_once "config.php";
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login/Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
     .card {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media (max-width: 480px) {
            body {
                max-width: 100%;
            }
         .card {
                flex-direction: column;
            }
            label {
                margin-top: 10px;
            }
            input[type="text"],
            input[type="password"] {
                width: 100%;
            }
            input[type="submit"] {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="card" id="login-card">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
        <button id="register-button" onclick="showRegister()">Register</button>
    </div>
    <div class="card" id="register-card" style="display: none;">
        <h1>Register</h1>
        <form action="register.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Register">
        </form>
        <button id="login-button" onclick="showLogin()">Login</button>
    </div>
    <script>
        function showRegister() {
            document.getElementById("login-card").style.display = "none";
            document.getElementById("register-card").style.display = "block";
            document.getElementById("register-button").style.display = "none";
            document.getElementById("login-button").style.display = "block";
        }
        function showLogin() {
            document.getElementById("login-card").style.display = "block";
            document.getElementById("register-card").style.display = "none";
            document.getElementById("register-button").style.display = "block";
            document.getElementById("login-button").style.display = "none";
        }
    </script>
</body>
</html>