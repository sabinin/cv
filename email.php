<?php
// the message
$msg = $_POST["message"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$subj=$_POST["email"];
// send email
mail("s-art@ukr.net",$subj,$msg);
?>