<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));
	$message = @trim(stripslashes($_POST['message']));

	$email_from = $email;
	$email_to = 'abdullah.atkaev@gmail.com';//replace with your email

	$body = 'Имя: ' . $name . "\n\n" . 'Мобильный номер: ' . $email . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message);
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Спасибо что оставили заявку. Мы свяжемся с Вами в скором времени! Ждите звонка!");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html" charset="utf-8">
</head>