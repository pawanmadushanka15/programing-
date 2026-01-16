<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h2>Add New Students</h2>

    <form method="POST" action="add.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>

        <input type="submit" value="Add Student">
    </form>
</body>

</html>