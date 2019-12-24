<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$phone = $_POST['phone'];
$subject = "Contact Request";
$message = $_POST['message'];

$to = "fekrascoutsgroup@gmail.com";
$headers = "From: ".$mailFrom."\nPhone: ".$phone;
$txt = "You have received an e-mail from " .$name. "\n\n" .$message;


mail ($to, $subject, $txt,$headers);
header("Location: index.php?mailsend");

echo "your message has been sent ";


}
?>
