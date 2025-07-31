<?php
include "connection.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone_number = $_POST['phone_number'];
    $combination = $_POST['combination'];
    $sql = " UPDATE students SET `fname`='$fname',`lname`='$lname',`phone_number`='$phone_number',`combination`='$combination' WHERE id = $id ";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("location: list.php?msg= Update student Successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <div class="title">
            <p>Update FORM</p>
            <?php
                $sql = "SELECT * FROM student WHERE id =$id LIMIT 1";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
            ?>
        </div>
        <form action="" method="post">
            <input type="text" name="fname"  value="<?php echo $row['fname'] ?>">
            <input type="text" name="lname"  value="<?php echo $row['lname'] ?>">
            <input type="number" name="phone_number"  value="<?php echo $row['phone_number'] ?>">
            <input type="text" name="combination" value="<?php echo $row['combination'] ?>">
            <input type="submit" name="submit" value="Update">
            <a href="list.php">Back to list...!! </a>
        </form>
    </div>
</body>
</html>