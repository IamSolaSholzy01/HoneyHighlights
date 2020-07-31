<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();
    
    $post_id = $_POST['post_id'];
    $type = $_POST['reaction'];
    
    if(isset($_COOKIE['rateLikeChnage'."_".$post_id])){
            $data = array(
                "id" => "error",
                "content" => "You already voted");
        }
        else{
            if($type=='like'){
                $fieldName='likes';
            }elseif($type=='dislike'){
                $fieldName='dislikes';
            }else{
                die();
            }
            $query="update reactions_table set $fieldName=$fieldName+1 where post_id='$post_id'";
            $datas->runSimpleQuery($connection, $query);
            
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
            $expire=time()+60*60*24*30;
              setcookie("rateLikeChnage"."_".$post_id, "rateLikeChnage"."_".$post_id, [
                'expires' => $expire,
                'secure' => true, 
                'samesite' => 'Strict'
            ]);
            
        }
    
    echo json_encode($data);
?>