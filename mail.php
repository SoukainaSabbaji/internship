<?php
$name = $_POST['nom'];
$email = $_POST['email'];
$website = $_POST['sujet'];
$message = $_POST['message'];
$recipient = "sabbajisoukaina@gmail.COM";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
