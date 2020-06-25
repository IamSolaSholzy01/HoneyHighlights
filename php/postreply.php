<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();

        
    $id = $_SESSION["member_id"];

    if($id!=null){
            
        $body = $_POST['text']; 
        $comment_id = $_POST['comment_id'];
        $sql = "SELECT * from user_table WHERE id = '$id'";
        $result = $datas->runSimpleQuery($connection, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];
            $email = $row['email']; 
            $sql2 = "INSERT INTO replies_table(comment_id,body,user_id,name,email) VALUE ('$comment_id','$body',$id,'$username','$email')";
            if ($datas->runSimpleQuery($connection, $sql2)) {
                $data = array(
                    "name" => $username,
                    "content" => $body,
                    "feedback" => "success"
                 );            
            }else {
            $data = array(
                "name" => $username,
                "content" => $body,
                "feedback" => "error"
            ); 
            }     
        }    
        echo json_encode($data);
 
    }else{
        $data = array(
            "id" => "1",
            "content" => "Please log in",
            "feedback" => "error"
        ); 
        echo json_encode($data);
    }        
?>