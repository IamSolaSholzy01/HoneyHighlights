<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();
    
    $post_id = $_POST['post_id'];
    
    

    if ($datas->runSimpleQuery($connection, $sql)) {
         
            
    } else {
        
    }
    echo json_encode($data);


?>