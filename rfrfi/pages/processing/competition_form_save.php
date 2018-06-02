<?php
$Name = Trim(stripslashes($_POST['user_name']));
$Surname = Trim(stripslashes($_POST['user_surname']));
$Birthday = $_POST['birth_day'] . "/" . $_POST['birth_month'] . "/" . $_POST['birth_year'];
$Email = Trim(stripslashes($_POST['user_email']));
$Tel = Trim(stripslashes($_POST['user_tel']));
$Location = Trim(stripslashes($_POST['user_location']));
$Answer = Trim(stripslashes($_POST['user_answer']));
if(isset($_POST['user_subscribe'])){
	$Subscribe = 'Yes';
	}
	else{
		$Subscribe = 'No';
	}

include_once('../../includes/dbal/dlinc.php');
$dl = new DataLayer();
$dl->dbCon($dlhostname, $dlusername, $dlpassword, $dldbname);
$dl->debug = true;


$dl->insert('competition_form', array(
	'user_name'=>$Name,
	'user_surname'=>$Surname,
	'user_email'=>$Email,
	'user_tel'=>$Tel,
	'user_birthday'=>$Birthday,
	'user_location'=>$Location,
	'user_subscribe'=>$Subscribe,
	'user_answer'=>$Answer,
	'date_time_stamp'=>date('Y-m-d H:i:s')
));



?>
