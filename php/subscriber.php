<?php
session_start();
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "honeyhighlights";

if($_POST && isset($_POST['email'])) {

    $email = $_POST['email'];
    $conn = mysqli_connect($servername, $db_username, $db_password, $db_name);

    $sql = "SELECT * from user_table where email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) { 
        $data = array(
            "id" => "Already existing",
            "content" => "Thank you for subscribing.",
            "email" => $email
        );
     }  else {

    $sqls = "INSERT INTO subscribe_table (email) VALUE ('$email')";

    if (mysqli_query($conn, $sqls)) {
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