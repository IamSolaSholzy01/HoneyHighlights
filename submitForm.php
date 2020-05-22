<?php

if($_POST && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //echo "gotten name = .$name";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbasename);
    
    echo "connection successful";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO contact_table VALUE ('$name','$email','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // send email and redirect
    $to = "olajumokeoyinda@gmail.com";
    $subject = "New contacts from form";
    mail($to, $subject, $message);
    //header("Location: contact.html");
    exit;
}




?>