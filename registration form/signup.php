<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <form class="form" action="sup.php" method="post">
            <h2>Sign Up</h2>
            <div class="ifield">
            <input type="text" name="uname" placeholder="Enter Username" ></div>
            <div class="ifield">
            <input type="email" name="uemail" placeholder="Enter Email" ></div>
            <div class="ifield">
            <div class="ifield">
            <input type="text" name="city" placeholder="Enter City" ></div>
            <div class="ifield">
            <input type="password" name="password" placeholder="Enter Password" ></div>
            <div class="ifield">
            <input type="password" name="cpassword" placeholder="Confirm Password"></div>
            <input type="submit" name="submit" value="Sign Up" class="button">
            <p>Already have an account <a href="login.php">Login</a></p>
</form>
    </div>
</body>
</html>