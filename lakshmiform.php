<?php
$name =  $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['text1'];
$formcontent="From: $name \n Message: $message";
$recipient = "luxmi.r.pillai@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
