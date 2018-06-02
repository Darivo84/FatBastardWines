<?php

$EmailFrom = Trim(stripslashes($_POST['user_email']));
$EmailTo = "info@fatbastardwine.co.za";
// $EmailTo = "kayla@designguru.co.za";
$Subject = "Enquiry from your website";
$Name = Trim(stripslashes($_POST['user_name']));
$Surname = Trim(stripslashes($_POST['user_surname']));

$Birthday = $_POST['birth_day'] . "/" . $_POST['birth_month'] . "/" . $_POST['birth_year'];
$Birthday_ara = $_POST['day_ara'] . "/" . $_POST['month_ara'] . "/" . $_POST['year_ara'];

$Email = Trim(stripslashes($_POST['user_email']));
$Tel = Trim(stripslashes($_POST['user_tel']));
$Location = Trim(stripslashes($_POST['user_location']));

$Message = Trim(stripslashes($_POST['user_message']));

$e_updates='';
$m_updates='';

if(isset($_POST['user_conditions'])){	$e_updates = 'Yes'; }else{ $e_updates = 'No'; }

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
$Body .= "Location: ";
$Body .= $Location;
$Body .= "\n";
$Body .= "Recieve updates?: ";
$Body .= $e_updates;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Date Of Birth: ";
$Body .= $Birthday;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

include_once('../../includes/dbal/dlinc.php');
$dl = new DataLayer();
$dl->dbCon($dlhostname, $dlusername, $dlpassword, $dldbname);
$dl->debug = true;

$e_updates='';
$m_updates='';

if(isset($_POST['user_conditions'])){
	$e_updates = 1;
	// $m_updates = 1;
}else{
	$e_updates = 0;
	// $m_updates = 0;
}

$dl->insert('subscription_form', array(
	'user_name'=>$_POST['user_name'],
	'user_surname'=>$_POST['user_surname'],
	'user_email'=>$_POST['user_email'],
	'user_tel'=>$_POST['user_tel'],
	'user_birthday'=>$Birthday,
	'user_birthday_ara'=>$Birthday_ara,
	'user_location'=>$_POST['user_location'],
	'user_location_ara'=>$_POST['user_location_ara'],
	'user_message'=>$_POST['user_message'],
	'e_updates'=>$e_updates,
	'date_time_stamp'=>date('Y-m-d H:i:s')
));

echo $_POST['user_message'];


?>
