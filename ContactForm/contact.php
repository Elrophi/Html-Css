<?php
$name =$_post['name'];
$visitor_email = $_post['email'];
$message = $_post['message'];


$email_from = 'johnmainasaul@uvuc.com';

$email_subject = "New form submition";

$email_body = "User Name: $name.\n". 
				"User Email: $visitor_email.\n".
				 "User Message: $message.\n";

$to = "elrophilskwaila@gmail.com";

$headers = "from $email_from \r\n";

$headers .="Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
  ?>