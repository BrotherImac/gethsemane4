<?php
include "db.php";

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$grade_level = $_POST['grade_level'];
$email = $_POST['email'];

$sql = "INSERT INTO students (firstname, middlename, lastname, grade_level, email)
VALUES ('$firstname', '$middlename', '$lastname', '$grade_level', '$email')";

if(mysqli_query($conn, $sql)){
    header("Location: view.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>