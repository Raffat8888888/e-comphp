<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    if ($_GET['action'] == 'add' && isset($_GET['id'])) {
        // Dummy cart logic (not secure)
        $productId = $_GET['id'];
        $_SESSION['cart'][] = $productId;
        header('Location: cart.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>
<body style="background-color:#e6f7f4">
    <h2 style="background-color:lightblue;padding:10px">Shopping Cart</h2>
    
    <?php if (isset($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $productId): ?>
                <li>ps <?php echo $productId; ?></li>
            <?php endforeach; ?>
        </ul>
        <button style="color:white;background-color:blue;font-size:20px">order now</button>
    <?php else: ?>
        <p>Your cart is empty</p>
    <?php endif; ?>
</body>
</html>
