<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<style>
body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

h2 {
    text-align: center;
    color: #333;
    margin-top: 40px;
}

form {
    background-color: white;
    width: 400px;
    margin: 20px auto;
    padding: 25px 30px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

label {
    display: block;
    margin-top: 12px;
    margin-bottom: 4px;
    color: #555;
    font-size: 14px;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #bbb;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}

input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #4a90d9;
    outline: none;
}

input[type="submit"] {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    background-color: #4a90d9;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 15px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #357abd;
}

p {
    text-align: center;
    margin-top: 12px;
    font-size: 13px;
}

p a {
    color: #4a90d9;
    text-decoration: none;
}
</style>
</head>
<body>

<h2>Edit Student</h2>

<?php
include "db.php";
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>First Name:</label>
    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required>

    <label>Middle Name:</label>
    <input type="text" name="middlename" value="<?php echo $row['middlename']; ?>">

    <label>Last Name:</label>
    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required>

    <label>Grade Level:</label>
    <input type="text" name="grade_level" value="<?php echo $row['grade_level']; ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

    <input type="submit" value="Save Changes">
</form>

<p><a href="view.php">Back to Student List</a></p>

</body>
</html>