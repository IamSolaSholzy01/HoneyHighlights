<?php

session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];

$_SESSION["member_id"] = $id;
$_SESSION["username"] = $username;
$_SESSION["email"] = $email;

$data = array(
    "name" => $_SESSION["username"],
    "email" => $_SESSION["email"],
    "feedback" => "success"
 );

 echo json_encode($data);
?>