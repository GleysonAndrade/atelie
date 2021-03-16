<?php

$to = Config::EMAIL_USER;
$subject = $_GET['subject'];
$message ='Email de ' . $_GET['name']. "\r\n" .$_GET['message'];
$dest = $GET['email'];
$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);

?>

<script>alert('Email enviado com sucesso:)!')</script>
<meta http-equiv="refresh" content="0; url=contato">