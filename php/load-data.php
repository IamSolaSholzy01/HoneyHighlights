<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbasename = "honeyhighlights";

$post_id = $_POST['post_id'];

//echo $post_id;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbasename);
    
    //echo " connection successful";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from posts_table where post_id = '$post_id'";

    //seelct comments
    $result = mysqli_query($conn, $sql);
    
    $data = array();
    if (mysqli_num_rows($result) > 0) {    
        $row = mysqli_fetch_assoc($result);
        $data = array(
            "author" => $row['author'],
            "created_at" => $row['created_at']
        );
    }else {
        $data = array(
        "id" => "error",
        "content" => "No post data");
    }

    echo json_encode($data);

?>

