<?php 
$to = $email_user; 
$from = $honeyhighlights_email; 
$fromName = $sender_name; 
 
$subject = "Thank you for subscribing to our news letter"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Honeyhighlights</title> 
    </head> 
    <body> 
        <h1>Thanks you for Subscribing with us!</h1> 
        <p> We will make sure you are first to know of our latest posts, and our offers</p>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>HoneyHighlights</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>contact@honeyhighlights.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://www.honeyhighlights.com">www.honeyhighlights.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
?>