<?php
require_once('class.phpmailer.php');

$EmailTo = $_POST['user_email'];
$EmailFrom = $_POST['from_email'];
$Subject = "Look at the postcard I just created on the South African Fat Bastard website";
$Name = Trim(stripslashes($_POST['user_name'])); 
$Surname = Trim(stripslashes($_POST['user_surname'])); 
$UserDetails = $Name . ' ' . $Surname;
$UserImage = $_POST['user_image'];
$Message = Trim(stripslashes($_POST['user_message'])); 

$mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch

$mail->isMail(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.designguru.com"; // SMTP server
  $mail->Port       = 25;                    // set the SMTP port
  $mail->setFrom($EmailFrom, $UserDetails );
  $mail->addAddress($EmailTo);
  $mail->Subject = $Subject;
  $mail->isHTML(true);
  $mail->addEmbeddedImage($UserImage, 'attach', '20150309091600_img.png');
  $mail->Body = "<p>$Message</p><br><img src='$UserImage'>";

  // $mail->AddAttachment('something.zip'); // this is a regular attachment (Not inline)
  $mail->Send();
  // echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>