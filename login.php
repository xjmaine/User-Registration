<?php include('server/server/php'); ?>
<!DOCTYPE>
<html>
    <head>
    <link rel="stylesheet" href="css/main.css" />
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Login</h2>
            </div>
            <form action="login.php" method="post">
                <div>
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="Username" required>
                </div>

                <!--<div>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder="Email">
                </div>-->

                <div>
                <label for="password">Password: </label>
                <input type="password" name="password_1" placeholder="Password" required>
                </div>

                <!--<div>
                <label for="password">Password</label>
                <input type="password" name="password_2" placeholder="Repeat Password">
                </div>-->

                <button type="submit" name="login_user">Login</button>

                <p>Not a user? <a href="registration.php"><b>Register</b></a></p>
            </form>
        </div>
    </body>
</html>