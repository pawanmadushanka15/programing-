<?php
include "db.php";
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<body>

    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 80%;
                margin: auto;
            }

            th,
            td {
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
    <h2 style="text-align: center;">All Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email_address</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo  $row['ID'] ?></td>
                    <td><?php echo  $row['Name'] ?></td>
                    <td><?php echo  $row['Email_address'] ?></td>
                    <td><?php echo  $row['Phone'] ?></td>
                    <td><?php echo  $row['Course'] ?></td>                    <td>
                        <a href="edit.php?id=<?php echo $row['ID'] ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['ID'] ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan = '6'>No students found.</td></tr>";
        }
        ?>
    </table>
</body>

</html>