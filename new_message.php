<?php
include "database.php";
    $id = $_POST["id"];
    $name= $_POST["first_name"];
    $family= $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile_number"];
    $phone = $_POST["phone_number"];


    mysqli_query($connection, "INSERT INTO messages(first_name,last_name,email,mobile_number,phone_number) VALUES('$name','$family','$email','$mobile','$phone')");
    
    //redirect
    header("Location: index.php");
?>