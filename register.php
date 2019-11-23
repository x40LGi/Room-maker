<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system using PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h2>Register</h2>
        </div><!--page header--->

        <form method="post" action="register.php">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div><!--Username-->

            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div><!--Email-->

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div><!--password-->
 
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
            </div><!--Confirm Password-->

            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div><!--Submit information-->

            <p>
                Already a member? <a href="login.php">Login</a>
            </p><!--link to login page-->

        </form>
    </body>
</html>