<?php
include 'db.php'; // Make sure this connects to your database

// Fetch all the students
$sql = "SELECT * FROM students"; // spelling fixed: 'studnets' → 'student'
$result = $conn->query($sql); // fixed variable name
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin: 0 5px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">All Students</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>

    <?php
    // Loop through all students and display
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['course'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>
            </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='6'>No students found</td></tr>";
    }
    ?>

</table>

</body>
</html>
