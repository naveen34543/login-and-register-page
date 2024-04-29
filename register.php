<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <form id="register-form" method="POST" action="registerdb.php">
        <h2>Register</h2>
        <!-- <label>User Name</label> -->
        <input type="text" name="username" id="username" placeholder="User Name" required>
        <input type="email" name="mail" id="mail" placeholder="Email" required>
        <!-- <label>Password</label> -->
        <input type="password" name="password" id="password" placeholder="Password" required>

        <button type="submit" id="register-btn">Submit</button>
    </form>
</body>
</html>