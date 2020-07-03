<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();
$connection = $datas->connectDB();

if($_POST && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $name = $util->clean_input($_POST['name']);
    $email = $util->clean_input($_POST['email']);
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_table VALUE ('$name','$email','$message')";

    if ($datas->runSimpleQuery($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // send email and redirect
    $to = "olajumokeoyinda@gmail.com";
    $subject = "New contacts from form";
    mail($to, $subject, $message);
    header("Location: ../contact.php");
    exit;
}




?>