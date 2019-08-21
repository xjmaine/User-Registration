<?php
session_start(); 
include_once('server/server.php'); 
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css" />
        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Register</h2>
            </div>
            <form action="registration.php" method="post">
            <?php  include('server/error.php');  include('server/server.php');?>
                <div>
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="Username" required>
                </div>

                <div>
                <label for="email">Email: </label>
                <input type="email" name="email" placeholder="Email" required>
                </div>

                <div>
                <label for="password">Password: </label>
                <input type="password" name="password_1" placeholder="Password" required>
                </div>

                <div>
                <label for="password">Confirm Password: </label>
                <input type="password" name="password_2" placeholder="Repeat Password" required>
                </div>

                <button type="submit" name="reg_user">Submit: </button>

                <p>Already a user? <a href="login.php"><b>Login in</b></a></p>
            </form>
        </div>
    </body>
</html>