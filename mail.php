<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$phnno = $_POST['phnno'];
$message= $_POST['msg'];
$to = "akhilapr1923@gmail.com";
$subject = "Mail From website";
$txt ="First Name = ". $fname . "\r\nLast Name = " . $lname . "\r\nEmail = " . $email ."\r\nPhone Number = " . $phnno . "\r\nMessage =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>