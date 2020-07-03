<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();
$connection = $datas->connectDB();

if($_POST && isset($_POST['name'], $_POST['email'], $_POST['message'])) {

    $name = $util->clean_input($_POST['name']);
    $email = $util->clean_input($_POST['email']);
    $request = $_POST['text'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_table VALUE ('$name','$email','$message')";

    if ($datas->runSimpleQuery($connection, $sql)) {
        $data = array(
            "id" => "success",
            "content" => "Your message has been sent");
    } else {
        $data = array(
            "id" => "error",
            "content" => "Please try again later");
    }

    echo json_encode($data);

    // send email to honey highlights and redirect
    $to = "honeyhighlights1@gmail.com";
    $from = $email; 
    $fromName = $name; 
    $subject = "New Request Contact";

    $htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Honeyhighlights</title> 
    </head> 
    <body> 
        <h1>New Contact Request</h1> 
        <p> You have been sent a new request</p>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>'.$fromName.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>'.$from. '</td> 
            </tr>
            <tr style="background-color: #e0e0e0;"> 
                <th>Service of Interest:</th><td>'.$request. '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Message:</th><td>'.$message. '</td> 
            </tr>
            <tr> 
                <th>:</th><td><a href="http://www.honeyhighlights.com">www.honeyhighlights.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>';


    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
    // Additional headers 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
    // Send email 
    //if(mail($to, $subject, $htmlContent, $headers)){ 
    //    echo 'Email has sent successfully.'; 
    //}else{ 
    //    echo 'Email sending failed.'; 
    //}

    //header("Location: ../contact.php");
    //exit;

}

?>