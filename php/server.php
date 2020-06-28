<?php
session_start();
require_once('Auth.php');
require_once('utilities.php');
$auth = new Auth();
$datas = new DBControllers();
$util = new Util();
require_once "authCookieSessionValidate.php";
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
            $sqls = "INSERT INTO user_table (firstname, surname, email, username, passkey) VALUES ('$firstname','$surname','$email','$username','$hashed_password')";
            $resolution = mysqli_query($connection, $sqls); 
            $insert = $auth->insertUser($firstname, $surname, $email, $username, $hashed_password);

            if ($resolution) {
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
        $data = array( 
            "id" => "emailerror",
            "content" => "That email doesn't exist");
    }elseif (count($result) > 0) {          
        $row = $result;
        $hashed_password = $row[0]['passkey'];
        
        if(password_verify($passkey, $hashed_password)) {
            $isAuthenticated = true; 
            if ($isAuthenticated) {
                $_SESSION["member_id"] = $row[0]["id"];
                $_SESSION["username"] = $row[0]["username"];
                $_SESSION["email"] = $row[0]["email"];
                // Set Auth Cookies if 'Remember Me' checked
                if (! empty($_POST["remember"])) {
                    setcookie("member_login", $email, $cookie_expiration_time);
                    
                    $random_password = $util->getToken(16);
                    setcookie("random_password", $random_password, $cookie_expiration_time);
                    
                    $random_selector = $util->getToken(32);
                    setcookie("random_selector", $random_selector, $cookie_expiration_time);
                    
                    $random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
                    $random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);
                    
                    $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);
                    
                    // mark existing token as expired
                    $userToken = $auth->getTokenByEmail($email, 0);
                    if (! empty($userToken[0]["id"])) {
                        $auth->markAsExpired($userToken[0]["id"]);
                    }
                    // Insert new token
                    $auth->insertToken($email, $random_password_hash, $random_selector_hash, $expiry_date);
                } else {
                    $util->clearAuthCookie();
                }
            } else {
                $message = "Invalid Login";
            }

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
    }else{
        $data = array( 
        "id" => "emailerror",
        "content" => "That email doesn't exist");
    }

    echo json_encode($data);
}

} catch(Exception $e) {
    echo $e->getMessage();
  }


?>