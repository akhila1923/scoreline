<?php
//get data from form  
$name = $_POST['name'];

$centre_name = $_POST['centre_name'];
$code = $_POST['code'];
$amount = $_POST['amount'];
$to = "akhilapr1923@gmail.com";
$subject = "Payment Completed through website";
$txt ="Name = ". $name . "\r\nScoreline Centre Name = " . $centre_name . "\r\nTransaction code received from Bank = " . $code . "\r\nTotal amount paid = " . $amount;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:payment-thank.html");



?>