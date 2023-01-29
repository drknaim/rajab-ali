<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from = 'info@rajab-ali.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
                "User email: $visitor_email.\n".
                 "subject: $subject.\n".
                 "User Massage: $massage.\n";

$to = 'naimahmed.srj@gmail.com';

$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")














?>