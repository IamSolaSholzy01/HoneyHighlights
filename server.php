<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbasename = "honeyhighlights";
$errors = array();


//Create Account
if($_POST && isset($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['username'])){

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $usename = $_POST['username'];
    $passkey = $_POST['password'];

    $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqls = "SELECT * FROM `user_table` WHERE username = '$usename' OR email = '$email'";
    $result = mysqli_query($conn, $sqls);

    $user = mysqli_fetch_assoc($result);

    if ($user){
        
        if ($user['username'] === $usename) {
            $data = array(
                "id" => "duplicateName",
                "content" => "Username already exists"
            );
            array_push($errors, "Username has been used before.");
            
        }
        elseif ($user['email'] === $email) {
            $data = array(
                "id" => "duplicateEmail",
                "content" => "The email already exists. Try logging in"
            );
            array_push($errors, "The email already exists. Try logging in?");
        }else{
            $data = array(
                "id" => "OKAY",
                "content" => "Connected Well"
            );
        }
    }  
    if (count($errors)==0) {
        //Hashing function
        $hashed_password = password_hash($passkey, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_table (firstname, surname, email, username, passkey) VALUE ('$firstname','$surname','$email','$usename','$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            $data = array(
                "id" => "success",
                "content" => "Account has been created"
            );
        }
     }  
    echo json_encode($data);
} 

elseif($_POST && isset($_POST['email'], $_POST['password'])){
    
    $email = $_POST['email'];
    $passkey = $_POST['password'];

    //echo "received input ";


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