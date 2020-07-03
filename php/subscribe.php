<?php
session_start();
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


        $to = $email;
        $from = 'example@honeyhighlights.com'; 
        $fromName = 'HoneyHighlights'; 
        $subject = "Subscription";
        $htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Honeyhighlights</title> 
    </head> 
    <body> 
        <h1>Thank you for subscribing to our blog</h1> 
        <p>You will be notified first of our updates</p>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
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

    } else {

    }
}
}
echo json_encode($data);



?>