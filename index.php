<?php
//logic - log in  to view
session_start();

if(isset($_SESSION['username'])){
    $_SESSION['asg'] = "Login to view page";
    header(":Location: login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header(":Location: login.php");
}
?>

<html>
    <head>
        <title>Home Page</title>
    </head>

    <body>
        <h1>Welcome to the homepage</h1>

        <?php
        //load html if connection is established
        if(isset($_SESSION['success'])) :
        ?>

        <div>
            <h3>
                <?php echo $_SESSION['sucess'];
                unset($_SESSION['success'])  ?>
            </h3>
        </div>

        <?php  endif ?>

        <?php //Display user information after log in
        if(isset($_SESSION['username'])) : ?>
            <h3>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></h3>

            <button><a href="index.php?logout='1'"></a></button>

            <?php endif ?>
    </body>
</html>