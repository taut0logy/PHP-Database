<?php

// Write your code to update data


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $update_query = "update reg_table set username = '$username', email = '$email', password = '$password' where id = $id";
    $update = mysqli_query($connection, $update_query);
    if ($update) {
        header("location:view.php");
    } else {
        echo "Data updation failed...";
    }
}

?>