<?php?>
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
        <button onclick="window.location.href='login.php'">Home</button>
    </div>
    <div id="signup-form">
        <form action="secret/signup/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>