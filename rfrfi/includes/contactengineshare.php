<?php
require_once('class.phpmailer.php');

$EmailTo = $_POST['user_email'];
$EmailFrom = $_POST['from_email'];
$Subject = "Someone you know has sent you a special message.";
$Name = Trim(stripslashes($_POST['user_name'])); 
$Surname = Trim(stripslashes($_POST['user_surname'])); 
$UserDetails = $Name . ' ' . $Surname;
$UserImage = $_POST['user_image'];
$UserMessage = Trim(stripslashes($_POST['user_message'])); 

$Message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Fat Bastard Email</title>
    <style type="text/css">
      body { margin: 0; padding: 0; }
    </style>
  </head>
  <body>
    <table  width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <table class="container" width="640" align="center" border="0" cellpadding="0">
            <tr>
              <td>
                <h1 style="font-family:times; font-weight:100; font-size:25px; line-height: 30px; text-align:center; color:#4D4D4D;margin-bottom:0; margin-top:60px;  letter-spacing: 1px;">Every Fat Bastard has its day. <br> Today, it&apos;s you.</h1>


              </td>
            </tr>
            <tr>
              <td width="100%">
                <p style="background-color:#6C6C6C; height:1px; width: 45%; margin-left: 28%;"></p>
              </td>
            </tr>
            <tr>
              <td>
                <p style="width:70%; margin-left:15%; margin-bottom:60px; margin-top:40px; color:#6c6c6c;  line-height: 19px; text-align: justify;">'
                  .$UserMessage.
                '</p>
              </td>
            </tr>
            <tr>
              <td bgcolor="#F8F8F8" style="padding: 40px 0px 40px 0px; background:url(http://www.fatbastardwine.co.za/elements/emailer/bg.jpg);">
                <div style="margin-left: 90px;">
                  <img src="'
                    .$UserImage.
                  '">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <p style=" text-align:center; margin-top:60px; margin-bottom:5px;">
                  <a style="font-family:times;color:#4D4D4D; text-decoration:none;" href="http://www.fatbastardwine.co.za">WWW.FATBASTARDWINE.CO.ZA</a>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <img width="640" height="39" src="http://www.fatbastardwine.co.za/elements/emailer/footer.jpg" alt="">
              </td>
            </tr>
          </table>
        </table>
      </td>
    </tr>
  </body>
</html>';

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
  $mail->Body = "$Message";
  $mail->Send();
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>