<?php
session_start();
require_once "config.php";
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
      .card {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        h1 {
            margin-top: 0;
        }
      .column {
            display: flex;
            flex-direction: column;
        }
      .row {
            display: flex;
            flex-wrap: wrap;
        }
      .column-6 {
            flex: 1;
            padding: 0 10px;
        }
        @media (max-width: 768px) {
          .column-6 {
                flex: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome, <?php echo $_SESSION['user']['name'];?></h1>
        <a href="logout.php">Logout</a>
    </div>
    <div class="row">
        <div class="column column-6">
            <div class="card">
                <h2>Orders</h2>
                <p>View and manage orders</p>
                <a href="orders.php">Go to Orders</a>
            </div>
            <div class="card">
                <h2>Products</h2>
                <p>View and manage products</p>
                <a href="products.php">Go to Products</a>
            </div>
        </div>
        <div class="column column-6">
            <div class="card">
                <h2>Customers</h2>
                <p>View and manage customers</p>
                <a href="customers.php">Go to Customers</a>
            </div>
            <div class="card">
                <h2>Suppliers</h2>
                <p>View and manage suppliers</p>
                <a href="suppliers.php">Go to Suppliers</a>
            </div>
        </div>
    </div>
</body>
</html>