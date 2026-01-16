<?php
require_once "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "insert into students (Name, Email_address, Phone, Course)
    values ('$name','$email','$phone','$course')";

    if($conn->query($sql) === TRUE){
        echo "Students added successfully!";
        header("Location: index.php");
    }else{
        echo "Error: ".$conn->error;
    }
}

$conn->close();
?>