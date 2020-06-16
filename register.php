<? php

if($_POST && isset($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['username'])){

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $usename = $_POST['username'];
    $passkey = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";

     // Create connection
     $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
     echo "connection successful";
 
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     echo "Connected successfully";

     //Hashing function
     $hashed_password = password_hash($passkey, PASSWORD_DEFAULT);
     $sql = "INSERT INTO user_table VALUE ('$firstname','$surname','$email','$usename','$hashed_password')";
 
     if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     header("Location: blog.html");

    /*
    if(password_verify($password, $hashed_password)) {
    
    } 
    */

}

?>