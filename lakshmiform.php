<?php
$name =  $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['text1'];
$formcontent="From: $name \n Message: $message";
$recipient = "luxmi.r.pillai@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
