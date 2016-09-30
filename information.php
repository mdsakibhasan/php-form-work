<?php 


$to=$_POST['to'];
$from=$_POST['from'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$message.= "<h1 style=\"background-color:red\">something</h1>";
$headers="From:".$from."\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

 ?>