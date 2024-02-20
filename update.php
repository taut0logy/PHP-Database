<?php

// Write your code to update data


if (isset($_POST['submit'])) {
    $connection = mysqli_connect("localhost:3307", "root", "", "php_database");
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $update_query = "update reg_info set username = '$username', email = '$email', password = '$password' where id = $id";
    $update = mysqli_query($connection, $update_query);
    if ($update) {
        echo "Data updated successfully...";
        header("location:view.php");
    } else {
        echo "Data updation failed...";
    }
}
