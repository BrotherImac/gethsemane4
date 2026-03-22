<?php
include "db.php";

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$grade_level = $_POST['grade_level'];
$email = $_POST['email'];

$sql = "UPDATE students SET firstname='$firstname', middlename='$middlename', lastname='$lastname', grade_level='$grade_level', email='$email' WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: view.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>