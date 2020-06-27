<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();
        
    $id = $_SESSION["member_id"];
    $username = $_SESSION["username"];
    $email = $_SESSION["email"]; 

    if($id!=null){
            
        $body = $_POST['text']; 
        $comment_id = $_POST['comment_id'];
        $post_id = $_POST['post_id'];

            $sql2 = "INSERT INTO replies_table(comment_id,post_id,body,user_id,name,email) VALUE ('$comment_id','$post_id','$body','$id','$username','$email')";
            
            if ($datas->runSimpleQuery($connection, $sql2)) {
                $data = array(
                    "name" => $username,
                    "content" => $body,
                    "feedback" => "success"

                 );            
            }else{
                $data = array(
                    "name" => $username,
                    "content" => $body,
                    "feedback" => "error"
                ); 
            }   
    }else{
        $data = array(
            "id" => "1",
            "content" => "Please log in",
            "feedback" => "error" 
        ); 
    }
    echo json_encode($data);        
?>