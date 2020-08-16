<?php
session_start();
require_once('classes.php');
$datas = new DBControllers();
$util = new Util();
$connection = $datas->connectDB();

if($_POST && isset($_POST['message'])) {

    $fromname = $_POST['fromName'];
    $emailsubject = $_POST['subject'];
    $message = $_POST['message'];
    $message2 = $_POST['message2'];
    $counter = 0;
    $sql = "SELECT email from dummy_subscribe_table";
    $result = $datas->runSimpleQuery($connection, $sql);
    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result))
        {
            $to = $row['email'];
            $from = 'contact@honeyhighlights.com.ng'; 
            $fromName = $fromname; 
            $subject = $emailsubject;
            $htmlContent = 
            '<html> 
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Honey Highlights</title>
                <style>
                    .container {padding: 50px;}
                </style>
            </head>

            <body>
                <div class="container">
                <div class="logo" style="display: block;"><img src="../img/logo-smoky.png" alt="" style="margin: auto; display: block;"></div>
                <p>
                    '.$message.'
                </p>
                <p>
                    '.$message.'
                </p>
                </div>
            </body>
            </html>';

            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            // Send email
            if(mail($to, $subject, $htmlContent, $headers)){ 
                    $counter++;
            }   
        }
        echo($htmlContent);
    } 
}else{
    $fromname = $_POST['fromName'];
    $emailsubject = $_POST['subject'];
    $counter = 0;
    $sql = "SELECT email from dummy_subscribe_table";
    $result = $datas->runSimpleQuery($connection, $sql);
    if (mysqli_num_rows($result) > 0) { 
        while($row = mysqli_fetch_assoc($result))
        {
            $to = $row['email'];
            $from = 'contact@honeyhighlights.com.ng'; 
            $fromName = $fromname; 
            $subject = $emailsubject;
            $htmlContent = 
            '<html> 
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Honey Highlights</title>
                <style>
                    .container {padding: 50px;}
                </style>
            </head>

            <body>
                <div class="container">
                <div class="logo" style="display: block;"><img src="../img/logo-smoky.png" alt="" style="margin: auto; display: block;"></div>
                <p>We are so happy to have you in our family. Honeyhighlights says “WELCOME”. You made the right choice by
                    subscribing and there is so much to learn and benefit from our website. Some of the benefits will be listed
                    down below
                </p>
                <p>1. EASY ACCESS : You can get through to us anytime you need our services, all you just have to do is fill the
                    contact form on our CONTACT PAGE. Our response is immediate . You can also use the phone number on the CONTACT
                    page, our number is always available. </p>
                <p>2. TIPS ON IMPROVING YOUR MAKEUP GAME
                    We also want you to get the best during your makeup routine, we have great articles from our blog post which
                    will help you to sharpen your skills. In cases whereby you have questions, you could just drop them in the
                    comment section below on the BLOG POST and you would receive an immediate response.</p>
                <p>3.EASY LOOK SELECTION: You don’t have to worry about our credibility or if we could give you the look you want,
                    you can go through our CATALOGUE to find makeup looks that you think would suite you the most.
                    Are you getting ready for that BIG DAY? Honeyhighlights is here to serve. Let’s give you that look that you so
                    much desire.
                </p>
                <p>N.B
                    You would always be the first to know when we have discount sales and giveaways. Remember to always expect to
                    hear from us.
                </p>
                </div>
            </body>
            </html>';

            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
            // Send email
            if(mail($to, $subject, $htmlContent, $headers)){ 
                    $counter++;
            }   
        }
        echo($htmlContent);
    } 
}