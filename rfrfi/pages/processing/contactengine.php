<?php

$EmailFrom = "";
$EmailTo = "kayla@designguru.co.za";
$Subject = "Enquiry from your website";
$Name = Trim(stripslashes($_POST['user_name'])); 
$Surname = Trim(stripslashes($_POST['user_surname'])); 
// $Birthday = $_POST['birth_day'] . "/" . $_POST['birth_month'] . "/" . $_POST['birth_year'];

$Email = Trim(stripslashes($_POST['user_email'])); 
$Tel = Trim(stripslashes($_POST['user_tel'])); 
// $Location = Trim(stripslashes($_POST['user_location'])); 

$Message = Trim(stripslashes($_POST['user_message'])); 
if(isset($_POST['user_conditions'])){ $userSubscribe = "Yes"; }else{ $userSubscribe = "No"; }
// if(isset($_POST['user_subscribe_email'])){ $EmailSubscribe = "Yes"; }else{ $EmailSubscribe = "No"; }


if(isset($_POST['submit'])){
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Surname: ";
$Body .= $Surname;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
// $Body .= "Recieve Updates Via Email: ";
// $Body .= $EmailSubscribe;
// $Body .= "\n";
$Body .= "Recieve Updates: ";
$Body .= $userSubscribe;
// $Body .= "\n";
// // send email 
// $Body .= "Date Of Birth: ";
// $Body .= $Birthday;
// $Body .= "\n";


$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

}
?>