<?php

// $EmailFrom = "";
$EmailTo = $_POST['user_email'];
$Subject = "Look at the postcard I just created on the South African FAT bastard website";
$Name = Trim(stripslashes($_POST['user_name'])); 
$Surname = Trim(stripslashes($_POST['user_surname'])); 
$UserImage = $_POST['user_image'];
$Message = Trim(stripslashes($_POST['user_message'])); 

if(isset($_POST['submit'])){
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Surname: ";
$Body .= $Surname;

// $Body .= "\n";
// $Body .= "Email: ";
// $Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// $Body .= "Message: ";


$Body .= '<img src="'.$UserImage.'">';
$Body .= "\n";
$success = mail($EmailTo, $Subject, $Body);
echo 'Thanks';
}
?>