<?php
include "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result) {
        header("location: list.php?msg= Delete student Successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
