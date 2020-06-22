<?php
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();
$connection = $datas->connectDB();
if($_POST && isset($_POST['email'])) {

    $email = $util->clean_input($_POST['email']);

    $sql = "SELECT * from user_table where email = '$email'";
    $result = $datas->runSimpleQuery($connection, $sql);
    if (mysqli_num_rows($result) > 0) { 
        $data = array(
            "id" => "Already existing",
            "content" => "Thank you for subscribing.",
            "email" => $email
        );
     }  else {

    $sqls = "INSERT INTO subscribe_table (email) VALUE ('$email')";

    if ($datas->runSimpleQuery($connection, $sqls)) {
        $data = array(
            "id" => "Successful",
            "content" => "Thank you for subscribing.",
            "email" => $email
        );
    } else {

    }
}
}
echo json_encode($data);

?>