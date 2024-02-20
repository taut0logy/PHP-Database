<?php

// Write your code to delete data
$conn = mysqli_connect("localhost:3307", "root", "", "php_database");
if (!$conn) {
    die('Connection Failed : ');
} else {
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $delete_query = "delete from reg_info where id = $id";
        $delete = mysqli_query($conn, $delete_query);
        if ($delete) {
            header("location:view.php");
        } else {
            echo "Data deletion failed...";
        }
    }
}
