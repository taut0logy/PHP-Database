<?php

// Write your code to delete data
$conn = mysqli_connect("localhost:3308", "root", "", "phpparina");
if (!$conn) {
    die('Connection Failed : ');
} else {
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $delete_query = "delete from reg_table where id = $id";
        $delete = mysqli_query($conn, $delete_query);
        if ($delete) {
            header("location:view.php");
        } else {
            echo "Data deletion failed...";
        }
    }
}