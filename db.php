<?php
$conn = mysqli_connect("localhost","root","","gethsemane4");

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>