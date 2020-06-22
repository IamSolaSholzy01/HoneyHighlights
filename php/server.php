<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();

$connection = $datas->connectDB();

try {
//Create Account
if($_POST && isset($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['username'])){
    $firstname = $util->clean_input(mysqli_real_escape_string($connection, $_POST['firstname']));
    $surname = $util->clean_input(mysqli_real_escape_string($connection, $_POST['surname']));
    $email = $util->clean_input(mysqli_real_escape_string($connection, $_POST['email']));
    $username = $util->clean_input(mysqli_real_escape_string($connection, $_POST['username']));
    $passkey = $_POST['password'];
    
    if (!(preg_match("/^.*(?=.{6,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $passkey)) || (!(strlen($username) >= 4)))
    {
        throw new Exception("Invalid Username and/or Password Format");
    }

    else {

        $sqls = "SELECT * FROM `user_table` WHERE username = '$username' OR email = '$email'";
        $result = $datas->runSimpleQuery($connection, $sqls);
        
        if ($result===null) {
            throw new Exception("No records inside the Database");
            //Hashing function
            $hashed_password = $util->hash($passkey);
            $sql = "INSERT INTO user_table (firstname, surname, email, username, passkey) VALUE ('$firstname','$surname','$email','$username','$hashed_password')";

            if ($datas->runSimpleQuery($connection, $sql)) {
                $data = array(
                "id" => "success",
                "content" => "Account has been created"
                );
            } 
        } else {
            $user = mysqli_fetch_assoc($result);
            if ($user){
                if ($user['username'] === $username) {
                    $data = array(
                    "id" => "duplicateName",
                    "content" => "Username already exists"
                    );
                } elseif ($user['email'] === $email) {
                    $data = array(
                    "id" => "duplicateEmail",
                    "content" => "The email already exists. Try logging in"
                    );
                } else {
                    $data = array(
                    "id" => "OKAY",
                    "content" => "Connected Well"
                    );
                }
            }
        }  
        
        
        echo json_encode($data);
    }
} 

elseif ($_POST && isset($_POST['email'], $_POST['password'])){
    
    $email = $util->clean_input(mysqli_real_escape_string($connection, $_POST['email']));
    $passkey = $_POST['password'];
    
    $sql = "SELECT * from user_table where email = '$email'";
    $result = $datas->runSimpleQuery($connection, $sql);
    if ($result===null) {
        throw new Exception("No records inside the Database");
    }
    
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
} catch(Exception $e) {
    echo $e->getMessage();
  }

?>