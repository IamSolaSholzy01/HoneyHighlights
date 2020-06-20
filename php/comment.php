<?php

if($_POST && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $post_id = $_POST['post_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['message'];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO comments_table(post_id,body,name,email) VALUE ('$post_id','$body','$name','$email')";

    if (mysqli_query($conn, $sql)) {
         
            $data = array(
                "name" => $name,
                "content" => $body,
                "feedback" => "success"
             );
            
    }else{
        $data = array(
            "name" => $name,
            "content" => $body,
            "feedback" => "error"
        );
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo json_encode($data);
}

?>