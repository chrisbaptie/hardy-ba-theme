<?php

$mailTo = $_POST['emailTo'];
$senderName = $_POST['senderName'];
$mailFrom = $_POST['emailFrom'];
$subject = $_POST['subject'];
$message = $_POST['message'];


mail($mailTo, $subject, "Message from: ".$senderName."\n\n".$message, "From: ".$mailFrom);

?>
