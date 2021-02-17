<?php
 $name = $_POST['name'];
 $subject = $_POST['subject';
 $user_email = $_POST['email'];
 $message = $_POST['message'];

 $email_from = 'bonsaikart123@gmail.com';

 $email_body = "User Name : $name.\n".
               "Subject : $subject .\n".
               "User Email : $user_email.\n".
               "Message : $message.\n";

   $to = 'shubhambrahmbhatt16@gmail.com'
   
   $headers = "From : $email_from \r\n";
   $headers .="reply-to : $user_email \r\n";

   mail($to,$subject,$email_body,$headers);

   header("Location: index.html");

?>