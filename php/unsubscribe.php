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
        
        $to = $email;
        $from = 'contact@honeyhighlights.com.ng'; 
        $fromName = 'HoneyHighlights'; 
        $subject = "Subscription";
        $htmlContent = ' 
    <html> 
    <head> 
        <title>Honeyhighlights</title> 
    </head> 
    <body> 
        <h1>You have unsubscribed from our mailing list</h1> 
        <p>You will no longer be notified of our updates</p>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>:</th><td><a href="http://www.honeyhighlights.com.ng">www.honeyhighlights.com.ng</a></td> 
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

?>