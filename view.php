<!DOCTYPE html>
<html>
<head>
<title>Student List</title>
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

table {
    width: 85%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 6px;
    overflow: hidden;
}

th {
    background-color: #4a90d9;
    color: white;
    padding: 10px 14px;
    text-align: left;
    font-size: 14px;
}

td {
    padding: 9px 14px;
    font-size: 14px;
    color: #444;
    border-bottom: 1px solid #eee;
}

tr:last-child td {
    border-bottom: none;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #eef5fc;
}

a.edit {
    color: #4a90d9;
    text-decoration: none;
    margin-right: 8px;
}

a.delete {
    color: #e05c5c;
    text-decoration: none;
}

a.edit:hover { text-decoration: underline; }
a.delete:hover { text-decoration: underline; }

p {
    text-align: center;
    font-size: 13px;
}

p a {
    color: #4a90d9;
    text-decoration: none;
}
</style>
</head>
<body>

<h2>Registered Students</h2>

<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Grade Level</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['middlename']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['grade_level']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this student?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

<p><a href="index.php">+ Add New Student</a></p>

</body>
</html>	