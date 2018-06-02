<?php


include_once('../../includes/dbal/dlinc.php');
include_once('../../includes/settings.php');
$dl = new DataLayer();
$dl->dbCon($dlhostname, $dlusername, $dlpassword, $dldbname);
$dl->debug = false;



$e_updates='';
$m_updates='';

if(isset($_POST['user_conditions'])){ 
	$e_updates = 1;
	// $m_updates = 1;
}else{ 
	$e_updates = 0;
	// $m_updates = 0;
}

echo $_POST['user_name'];

$dl->insert('contact_form', array(
	'user_name'=>$_POST['user_name'],
	'user_surname'=>$_POST['user_surname'],
	'user_email'=>$_POST['user_email'],
	'user_tel'=>$_POST['user_tel'],
	'user_message'=>$_POST['user_message'],
	'e_updates'=>$e_updates,
	'b_year'=>$_POST['year'],
	'b_month'=>$_POST['month'],
	'b_day'=>$_POST['day'],
	'date_time_stamp'=>date('Y-m-d H:i:s')
));



?>