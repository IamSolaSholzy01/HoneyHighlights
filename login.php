<? php

if($_POST && isset($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['username'])){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
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
 
     $sql = "INSERT INTO user_table VALUE ('$firstname','$surname','$email','$username','$passkey')";
 
     if (mysqli_query($conn, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     header("Location: blog.html");
}

?>