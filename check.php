<?php
// print_r($_POST);
$email = $_POST['mail'];
$pass = $_POST{'pass'};

$error='';
if(trim($email)=='')
$error='wrong email';
else if(trim($pass)=='')
$error  = 'wrong pass';

if($error != ''){
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Test message")."?=";
$headers = "from: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail("edojan@mail.ru",$subject, $message, $headers);
header('Location: /index.php')
?>