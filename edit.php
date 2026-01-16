<?php
require_once "db.php";

$id = $_GET['id'];

$sql ="SELECT * FROM students WHERE id=$id";
$result=$conn->query($sql);
$student=$result->fetch_assoc();

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];

    $sql="UPDATE students SET Name='$name',Email_address='$email',Phone='$phone',course='$course' where id='$id'";
    if($conn->query($sql)){
        header("Location: index.php");
    }else{
     echo "Error: ".$conn->error;
}

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Student</title>
    </head>
    <body>
        <h2>Edit Students</h2>
        <form method="POST" action="">
            Name:<input type="text" name="name" value="<?php echo $student["Name"] ?>" required><br><br>
            Email:<input type="email" name="email" value="<?php echo $student["Email_address"] ?>" required><br><br>
            Phone:<input type="text" name="phone" value="<?php echo $student["Phone"] ?>" required><br><br>
            Course:<input type="text" name="course" value="<?php echo $student["Course"] ?>" required><br><br>
            <input type="submit" name="update" value="Update student">
        </form>
</body>
</html>
