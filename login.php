<?php

if($_POST && isset($_POST['email'], $_POST['password'])){
    
    $email = $_POST['email'];
    $passkey = $_POST['password'];

    //echo "received input ";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";


    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
    //echo " connection successful";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo " connected successfully";  
 
    $sql = "SELECT * from user_table where email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {          
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['passkey'];
        
        if(password_verify($passkey, $hashed_password)) {
            $data = array(
            "id" => "success",
            "content" => "Login Successful");
        } else {  
            $data = array(
            "id" => "error",
            "content" => "Wrong email/password combination");
        }
    } else {
        $data = array(
        "id" => "emailerror",
        "content" => "That email doesn't exist.");
    }

    echo json_encode($data);
}

?>