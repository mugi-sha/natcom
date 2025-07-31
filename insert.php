<?php
require_once "connection.php";
if (isset($_POST['submit']))
    { // button is clicked 1.
    // get values from form 2.
    $code = $_POST['code'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_number = $_POST['phone_number'];
    $combination = $_POST['combination'];
    // validate inputs 3.
    $sql = "INSERT INTO student (id,code,fname,lname,phone_number,combination) VALUES (NULL,$code,'$fname','$lname','$phone_number', '$combination')";
    // execute query 4.
    $result = mysqli_query($conn,$sql);
    // check if query was successful 5.
    if($result) {
        echo "Registration successful!";
        header("Location: list.php"); // redirect to list page
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
