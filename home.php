<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
      div {
            margin:10px;padding:10px;
        } 
    </style>
</head>
<body style="background-color:#e6f7f4">
    <h1 style="background-color:blue;color:white">Welcome to world of play station, <?php echo $_SESSION['username']; ?>!</h1>
    <h2 style="background-color:lightblue">Products</h2>
    
    <div>
    <p>ps4 - $100 <img src="hd.jpg" height="250px" width="250px" style="padding:30px"><a href="cart.php?action=add&id=4">Add to Cart</a></p>
    </div>
    <div>
    <p>ps5 - $499 <img src="ps.jpg" height="250px" width="250px" style="padding:30px"><a href="cart.php?action=add&id=5">Add to Cart</a></p>
    </div>
    <a href="cart.php" style="purple;font-size:40px;text-decoration:underline overline">View Cart</a>
    
</body>
</html>
