<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbasename = "honeyhighlights";
$errors = array();

if($_POST && isset($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['username'])){

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $usename = $_POST['username'];
    $passkey = $_POST['password'];
    

    //echo $usename;
    //echo "received input";
     // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
    //echo "connection successful";
     
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    

    //Check to make sure the username and email are not already existing.
    $sqls = "SELECT * FROM `user_table` WHERE username = '$usename' OR email = '$email'";
    $result = mysqli_query($conn, $sqls);
    $data = array(
        "response" => "OKAY",
        "content" => "Connected Well"
    );
    /*
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        echo "<br />name already exists";
        
        if ($user['username'] === $usename) {
            $data = array(
                "response" => "duplicateName",
                "content" => "Name already exists"
            );
            array_push($errors, "Username has been used before.");
            //echo("<br /><h1 style='color:red;'>HIIIII</h1><br/>");
        }
        if ($user['email'] === $email) {
            $data = array(
                "response" => "duplicateEmail",
                "content" => "The email already exists. Try logging in"
            );
            array_push($errors, "The email already exists. Try logging in?");
            //echo("<br /><h1 style='color:red;'>HIIIII</h1><br/>");
        }
    }
     
     if (count($errors)==0) {
        //Hashing function
        $hashed_password = password_hash($passkey, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user_table (firstname, surname, email, username, passkey) VALUE ('$firstname','$surname','$email','$usename','$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            $data = array(
                "response" => "success",
                "content" => "Account has been created"
            );
            echo "<h1>New record created successfully</h1>";
            //header("Location: blog.html");
        }
     }  
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        $data = array(
            "response" => "error",
            "content" =>  mysqli_error($conn)
        );
        //header("Location: login_register_modal.html");
    }
     */
    echo json_encode($data);

}

if($_POST && isset($_POST['email'], $_POST['password'])){

    $email = $_POST['email'];
    $passkey = $_POST['password'];

    echo "received input ";

     // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
     echo " connection successful";
 
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     echo " connected successfully";

     $sql = "SELECT * from user_table where email = '$email'";
     
     if ($result = mysqli_query($conn, $sql)) {
        
        echo "Returned rows are: " . mysqli_num_rows($result);
            
        $row = mysqli_fetch_assoc($result);
            print_r($row['passkey']);
            $hashed_password = $row['passkey'];
            if(password_verify($passkey, $hashed_password)) {
                echo ('succesfully logged in');
                $data['response'] = "Success";
                $data['content'] = "Login Successful";
            }else{
                echo ('Wrong email, password combination');  
                $data['response'] = "Error";
                $data['content'] =  "Wrong email or Password";
            } 
      
    }
     else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         echo ("<script>shakeModal();</script>");
     }
     //header("Location: blog.html");
     echo json_encode($data);
}
echo ("<script src='assets/js/login-register.js></script>");

?>