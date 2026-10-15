<?php
require_once 'secret/config/config_session.inc.php';
require_once 'secret/login/login_view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film suggester</title>
</head>
<body>
    <div class="header">
        <h1>Film suggester</h1>
    </div>
    <div id="login-form">
        <form action="secret/login/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password" >
            <button type="submit">Login</button>
            <?php
            check_errors($_SESSION['login_errors'] ?? []);
            unset($_SESSION['login_errors']);
            ?>
        </form>
        <a href="signup.php">Register</a>
    </div>
</body>
</html>