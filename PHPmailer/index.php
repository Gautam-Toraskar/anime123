<?php
require_once('Send_Mail.php');
$to = "prashant7736@gmail.com";
$subject = "test mail raghu";
$body = "Hi<br/>Test Mail raghu<br/> "; // HTML  tags
Send_Mail($to,$subject,$body);
?>