<?php
//get data from form  
$name = $_POST['name'];

$centre_name = $_POST['centre_name'];

$to = "akhilapr1923@gmail.com";
$subject = "Mail From Payment Page";
$txt ="Name = ". $name . "\r\nScoreline Centre Name = " . $centre_name;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:qrcode.html");



?>