<?php
session_start();

require_once "Auth.php";
require_once "utilities.php";

$auth = new Auth();
$db_handle = new DBControllers();
$util = new Util();
$connection = $db_handle->connectDB();
require_once "authCookieSessionValidate.php";

if ($isLoggedIn) {
    ?>
    <script type="text/javascript" src="../js/ajax.js">
       setAsLoggedIn();
       console.log("You are logged in.");
    </script>
    <?php
}

if ($_POST && isset($_POST['email'], $_POST['password'])) {
    $isAuthenticated = false;
     
    $email = $util->clean_input(mysqli_real_escape_string($connection, $_POST['email']));
    $passkey = $_POST['password'];
    
    $user = $auth->getMemberByEmail($email);
    if (count($user) > 0) {
        $row = $user;
        if (password_verify($passkey, $user[0]["passkey"])) {
            $isAuthenticated = true;
            $data = array(
                "id" => $row[0]['id'],
                "username" => $row[0]['username'],
                "email" => $row[0]['email'],
                "firstname" => $row[0]['firstname']
            );
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
    if ($isAuthenticated) {
        $_SESSION["member_id"] = $user[0]["id"];
        $_SESSION["username"] = $user[0]["username"];
        $_SESSION["email"] = $user[0]["email"];
        
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
        //$util->redirect("dashboard.php");
    } else {
        $message = "Invalid Login";
    }
    echo json_encode($data);
}
?>
<script src="../js/ajax.js"></script>