<?php include 'userReg/server/server.php'; 
include 'userReg/registration.php';?>
<!DOCTYPE>
<html>
    <head>
    <link rel="stylesheet" href="userReg/css/main.css" />
        <title>Registration</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Register</h2>
            </div>
            <form action="/userReg/registration.php" method="post" required>
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
                <label for="password">Password: </label>
                <input type="password" name="password_2" placeholder="Repeat Password" required>
                </div>

                <button type="submit">Submit</button>

                <p>Already a user? <a href="/userReg/login.php"><b>Login in</b></a></p>
            </form>
        </div>
    </body>
</html>