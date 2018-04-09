<?php
/**
 * Created by PhpStorm.
 * User: Darius
 * Date: 4/3/2018
 * Time: 9:26 PM
 */
session_start();
if(isset($_POST['btnSend'])){
    require  'connection.php';
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];
    $query = 'INSERT INTO `test`.`messages` (`Nume`, `Prenume`, `Email`, `Mesaj`) VALUES ("'.
            $nume . '","'. $prenume . '","'. $email . '","'. $mesaj . '")';
    $result = mysqli_query($connection, $query );

    if(!$result){
        echo 'something went wrong';
    }
    else{
        $_SESSION['nume'] = $nume;
        header('Location: home.php');

    }
}
?>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form method="post" action="contact.php?action=sendMessage">
            <div class="form-row">
                <div class="form-gorup col">
                    <label for="Nume">Nume:</label>
                    <input type="text" class="form-control" id="Nume" placeholder="Nume" name="nume">
                </div>
                <div class="form-gorup col">
                    <label for="Prenume">Prenume:</label>
                    <input type="text" class="form-control" id="Prenume" placeholder="Prenume" name="prenume">
                </div>
            </div>
            <br>
            <div class="form-gorup">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" id="Email" placeholder="Email" name="email">
                <br>
            </div>

            <div class="form-gorup">
                <label for="Mesaj">Mesaj:</label>
                <textarea  class="form-control" id="Mesaj" placeholder="Mesaj" name="mesaj" rows="5"></textarea>
                <br>
            </div>

            <div class="form-gorup">
                <input type="submit" class="btn btn-primary btn-block" name="btnSend" value="Send">
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
