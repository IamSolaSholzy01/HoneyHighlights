<?php
session_start();
require_once('Auth.php');
require_once('utilities.php');
$auth = new Auth();
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

        $result = $auth->getMemberByUsernameOrEmail($username, $email);
        
        if ($result===null) {
            //Hashing function
            $hashed_password = $util->hash($passkey);
            $insert = $auth->insertUser($firstname, $surname, $email, $username, $hashed_password);

            if ($insert) {
                $data = array(
                "id" => "success",
                "content" => "Account has been created"
                );
            } 
        } else {
            $user = $result;
            if ($user){
                if ($user[0]['username'] === $username) {
                    $data = array(
                    "id" => "duplicateName",
                    "content" => "Username already exists"
                    );
                } elseif ($user[0]['email'] === $email) {
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
//Log In 
elseif ($_POST && isset($_POST['email'], $_POST['password'])){
    $isAuthenticated = false;
    $email = $util->clean_input(mysqli_real_escape_string($connection, $_POST['email']));
    $passkey = $_POST['password'];

    $result = $auth->getMemberByEmail($email);

    if ($result===null) {
        throw new Exception("No records inside the Database");
    }
    
    if (count($result) > 0) {          
        $row = $result;
        $hashed_password = $row[0]['passkey'];
        
        if(password_verify($passkey, $hashed_password)) {
            $isAuthenticated = true;
            $data = array(
                "id" => $row[0]['id'],
                "username" => $row[0]['username'],
                "email" => $row[0]['email'],
                "firstname" => $row[0]['firstname']);
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