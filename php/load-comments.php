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

    $sql = "SELECT * from comments_table where comments_table.post_id = '$post_id' ORDER BY comments_table.created_at";
    
    //seelct comments
    $result = mysqli_query($conn, $sql);
    
    $data = array();
    if (mysqli_num_rows($result) > 0) {    
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }

    }else{
        $data = array(
        "id" => "error",
        "content" => "No comments for this post");
    }

    echo json_encode($data);

?>

