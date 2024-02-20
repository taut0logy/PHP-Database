<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>

    <?php
    // Write your code to retrieve data
    $conn = mysqli_connect("localhost:3307", "root", "", "php_database");
    if (!$conn) {
        die('Connection Failed : ');
    } else {
        echo "Connection Successful...<br/>";
        $select_query = "select * from reg_info";
        $select = mysqli_query($conn, $select_query);
        $count = mysqli_num_rows($select);
        if ($count > 0) {
            echo "Data retrieved successfully...</br>";
    ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Joined</th>
                    <th>Action</th>
                </tr>
        <?php
            while ($row = mysqli_fetch_array($select)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['joined'] . "</td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id']
                    . "'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No data found...";
        }
    } ?>


</body>

</html>