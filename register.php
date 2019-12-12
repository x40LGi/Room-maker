<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" 
content="This is an example of a meta description. 
This will often show up in search results">
        <meta name="viewport" content="width=
device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <title>Register Page</title>
    </head>

    <body style="background-color: lightblue;">
        <div class="container" style="background-color: grey;">
            <div class="row">
                <div class="col-2">
                    <img src="https://tiny.cc/tulippa" style="width:155px;border-radius: 0%;"/>                    
                </div>
                <div class="col-4"></div>
                <div class="col" style="padding-bottom:20px;">
                    <br>
                    <form action="includes/register.inc.php" method="post">
                        <input size="9" type="text" name="uid" placeholder="Username...">
                        <input size="21" type="password" name="pwd" placeholder="Password...">
                        <input size="9" type="text" name="mail" placeholder="Email...">
                        <input size="21" type="password" name="pwd-repeat" placeholder=
"Confirm your Password..."><br><br>
                        <button type="submit" name="signup-submit" 
style="background-color:#eeeeee;border-radius:10px;border:none;">Register</button>
                    </form>
                </div>
                <div class="col-2">
                    <br>
                    <a href="login.php" style="color:black;font-size:20px;font-weight:900;">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>