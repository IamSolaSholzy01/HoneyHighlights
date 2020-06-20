<?php
if(isset($_POST['email'], $_POST['password'])){
    //print_r($_POST);
    //$email = $_POST['email'];
    //$passkey = $_POST['password'];

    //echo "received input ";
    //echo ('succesfully logged in');
    $fab = false;
        $data = array(
            "response" => "success",
            "content" => "Login Successful"
        );

        if($fab == false){
            $data = array(
                "response" => "error",
                "content" => "Login Failed"
            );
        }

        echo json_encode($data);
}
    
?>