<?php

if($_POST && isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $passkey = $_POST['password'];

    //echo "received input ";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";
    $data = array(
        "id" => "success",
        "content" => "OKAYYY"
    );

     // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
     //echo " connection successful";
 
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     //echo " connected successfully";

     $sql = "SELECT * from user_table where email = '$email'";
     
     if ($result = mysqli_query($conn, $sql)) {
        
        //echo "Returned rows are: " . mysqli_num_rows($result);
            
        $row = mysqli_fetch_assoc($result);
            //print_r($row['passkey']);
            $hashed_password = $row['passkey'];
            if(password_verify($passkey, $hashed_password)) {
                //echo ('succesfully logged in');
                $data['id'] = "Success";
                $data['content'] = "Login Successful";
            }else{
                //echo ('Wrong email, password combination');  
                $data['id'] = "Error";
                $data['content'] =  "Wrong email or Password combination";
            } 
      
    }
     else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

     echo json_encode($data);
}

?>