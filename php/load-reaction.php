<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();
    
    $post_id = $_POST['post_id'];
    
    $sql="select * from reactions_table where post_id='$post_id'";
    $result = $datas->runSimpleQuery($connection, $sql);
    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_assoc($result);
        $likes=$row['likes'];
        $dislikes = $row['dislikes'];

        $data = array(
            "id" => "success",
            "likes" => $likes,
            "dislikes" => $dislikes);
    }else{
        $data = array(
            "id" => "error",
            "likes" => $likes,
            "dislikes" => $dislikes);

    }
    
    echo json_encode($data);
?>