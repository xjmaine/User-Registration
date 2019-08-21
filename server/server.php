<?php
    session_start();

    //initialise variables
    $username = "";
    $email ="";
    
    //validation
    $errors=array();

    //connect to database
    $db=mysqli_connect('localhost', 'root', 'root', 'practice') or die('Database not found!');
    /*try{
        $pdo = new PDO('mysql:host=localhost;dbname=practice', 'root', 'root');
    

    }catch(PDOException $e){
        exit('Database error');
    }*/


    //register users
    //retrive from form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2= mysqli_real_escape_string($db, $_POST['password_2']);

    //form validation
    if(empty($username)) {array_push($errors, "Username required!");};
    if(empty($email)) {array_push($errors, "Email is required!");};
    if(empty($password_1)) {array_push($errors, "Password is required!");};

    //compare password
    if($password_1 != $password_2) {array_push($errors, "Passwords don't match!");};

    //validate existing username
    $user_check_query = "SELECT * FROM user WHERE username= '$username' or email='$email' LIMIT 1";

    $results = mysqli_query($pdo, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if($user){
        if($user['username'] === $username){
            array_push($errors, "Username already exist!");
        }

        if($user['email'] === $email){
            array_push($errors, "Email already exist!");
        }
    }

    //register user if no error
    if(count($errors) ==0){
        //encrypt password with md5
        $password = md5($password_1);
        //$query= $pdo->prepare('INSERT INTO user (username, email, password) VALUES($username, $email, $password)');
        $query= 'INSERT INTO user (username, email, password) VALUES($username, $email, $password)';
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['sucess'] = "You're now logged in";

        //rediect
        header('Location: index.php');
    }

    //Login user
    if(isset($_POST['login_user'])){
        $username=mysqli_real_escape_string($db, $_POST['username']);
        $password=mysqli_real_escape_string($db, $_POST['password_1']);

        //error check
        if(empty($username)){
            array_push($errors, "Username is required!");
        }
        if(empty($password)){
            array_push($errors, "Password is required!");
        }

        if(count($errors) ==0){
            $password=md5($password);
            $query="SELECT * FROM user WHERE username='$username' AND password='$password' ";
            $results=mysqli_query($db, $query);

            if(mysqli_num_rows($results)){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in successfully";

                header('Location: index.php');
            } else{
                array_push($errors, "Wrong username or password, try again!");
            }
        }
    }

?>