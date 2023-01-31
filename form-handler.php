<?php
$name = $_post['name'];
$visitors_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@nomtech.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitors_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n".
    
$to = 'shivambharti2206@gmail.com';
$headers = "From $email_form \r\n";
$headers .= "Reply-to: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");





?>