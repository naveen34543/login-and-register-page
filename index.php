<?php
   include("connect.php");
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <form id="login-form" method="POST">
        <h2>LOGIN</h2>
        
        <input type="text" name="username" id="username" placeholder="User Name" required>

        <input type="password" name="password" id="password" placeholder="Password" required>
        <br>
        <button type="submit" id="login-btn">Login</button>
        <br>
        <a href="register.php">Register</a>

<?php
session_start();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: Dash.html");
        exit();
    } 
    else {
        echo '<br>';
        echo '<div class="alert">Invalid Username/Password!</div><br>';
    }

    $conn->close();
}
?>
    </form>
    
</body>
</html>