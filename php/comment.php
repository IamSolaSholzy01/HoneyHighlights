<?php
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();

if($_POST && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $post_id = $_POST['post_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['message']; 
    
    $sql = "INSERT INTO comments_table(post_id,body,name,email) VALUE ('$post_id','$body','$name','$email')";

    if ($datas->runSimpleQuery($connection, $sql)) {
         
            $data = array(
                "name" => $name,
                "content" => $body,
                "feedback" => "success"
             );
            
    } else {
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