<?php
$to = "alt.y1-67a2wo0@yopmail.com";
$subject = $_GET['Subject'];
$msg = $_GET['Message'];
$headers = "From: ".$_GET['Email'] . "\r\n Name: ".$_GET['Name']."\r\n";

mail($to,$subject,$msg,$headers);
?>