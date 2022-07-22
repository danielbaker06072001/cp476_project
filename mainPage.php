<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Shopping</title>
    <link rel = "stylesheet" href = "./src/style/login.css">
</head>

<?php
    
?>

<body>
    <div class = "container">
        <form class = "square" action = "handle_login.php" method = "POST">
            <h1>Log Into Your Account</h1>
            <h2>Username:</h2>
            <input name = "username" type = "text" name = "username">
            <h2>Password:</h2>
            <input name = "pass" type ="password" class = "password-box" name ="password">
            <button type = "submit">Continue</button>
        </form>
    </div>
</body>