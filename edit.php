<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>


    <?php

    $connection = mysqli_connect('localhost', 'root', '', 'reg_db');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_REQUEST['id'])) {
        // Write code to retrieve data
        $id = $_REQUEST['id'];
        $select_query = "select * from reg_table where id = $id";
        $info = mysqli_query($connection, $select_query);
        while ($row = mysqli_fetch_assoc($info)) {
            ?>
            <div class="container">
                <h2>Update Data</h2>
                <form action="update.php" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo $row['username'] ?>">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="<?php echo $row['username'] ?>">
                    <input type="submit" name="submit" value="Update">
                    <!-- Write code to send hidden id -->
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </form>
            </div>

            <?php
        }
    }
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
    mysqli_close($connection);
    ?>

</body>

</html>