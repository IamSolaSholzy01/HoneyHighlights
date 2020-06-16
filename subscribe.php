<?php
if($_POST && isset($_POST['email'])) {

    $email = $_POST['email'];

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

    $sql = "INSERT INTO subscribers_table (email) VALUE ('$email')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>