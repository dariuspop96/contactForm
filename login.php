<?php
/**
 * Created by PhpStorm.
 * User: Darius
 * Date: 4/9/2018
 * Time: 1:10 PM
 */
session_start();
if(isset($_POST['btnLogin'])){
    require  'connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM `users`WHERE username = "'. $username . '" AND password = "'. $password . '"';
    $result = mysqli_query($connection, $query );

    if(mysqli_num_rows($result)==0){
        echo 'Username or password is incorrect. Try again!' . '<br>';
    }
    else{
        $_SESSION['username'] = $username;
        header('Location: messages.php');

    }
}

?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form method="post" action="login.php?action=login">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="Username" placeholder="Username" name="username">
                </div>
                <div  class="form-group">
                    <label for="Password">Password</label>
                    <input type="text" class="form-control" id="Password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="btnLogin" value="Login">
                </div>
            </form>
        </div>
    </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
