<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
    <div class="container">
        <?php
        // Write your code to insert data
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $conn = mysqli_connect("localhost:3307", "root", "", "php_database");
            if (!$conn) {
                die('Connection Failed :');
            } else {
                echo "Connection Successful...<br/>";
                $insert_query = "insert into reg_info(username, email, password) values('$username', '$email', '$password')";
                $insert = mysqli_query($conn, $insert_query);
                if ($insert) {
                    echo "Registration Successful...<br/>";
                } else {
                    echo "Registration Failed...<br/>";
                }
            }
        }
        ?>

        <br />

        <h2>User Registration Form</h2>

        <form action="reg.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>