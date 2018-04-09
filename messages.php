<?php
/**
 * Created by PhpStorm.
 * User: Darius
 * Date: 4/9/2018
 * Time: 1:36 PM
 */
?>

<table class="table"
    <thead>
        <tr>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Email</th>
            <th>Mesaj</th>
        </tr>
    </thead>

    <tbody>
        <?php
        require  'connection.php';
        $result = mysqli_query($connection, "SELECT Nume, Prenume, Email, Mesaj FROM messages");

        while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td> <?php echo $row['Nume'] ?></td>
            <td> <?php echo $row['Prenume'] ?></td>
            <td> <?php echo $row['Email'] ?></td>
            <td> <?php echo $row['Mesaj'] ?></td>
        </tr>

        <?php endwhile; ?>
    </tbody>
</table>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
