<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();
$connection = $datas->connectDB();
if($_POST && isset($_POST['email'])) {

    $email = $util->clean_input($_POST['email']);
    
    $sqls = "DELETE from subscribe_table (email) VALUE ('$email')";

    if ($datas->runSimpleQuery($connection, $sqls)) {
        echo('You have unsubscribed from our mailing list');
    } else {
        echo('An error occured. Please try again later');
    }

}

?>