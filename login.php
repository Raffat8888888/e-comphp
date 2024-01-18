<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php
    // Dummy login logic (not secure)
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the credentials are valid (dummy check)
        if ($username === 'raffat' && $password === 'pass') {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: home.php');
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
    ?>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>

    <form method="post" action="">
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
