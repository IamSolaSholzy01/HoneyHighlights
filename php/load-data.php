<?php
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();

$post_id = $_POST['post_id'];

    $sql = "SELECT * from posts_table where post_id = '$post_id'";

    //seelct comments
    $result = $datas->runSimpleQuery($connection, $sql);
    
    $data = array();
    if (mysqli_num_rows($result) > 0) {    
        $row = mysqli_fetch_assoc($result);
        $data = array(
            "author" => $row['author'],
            "created_at" => $row['created_at']
        );
    } else {
        $data = array(
        "id" => "error",
        "content" => "No post data");
    }
    echo json_encode($data);
?>

