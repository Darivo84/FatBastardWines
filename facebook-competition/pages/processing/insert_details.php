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
	$m_updates = 1;
}else{ 
	$e_updates = 0;
	$m_updates = 0;
}



$dl->insert('user_details', array(
	'fname'=>$_POST['user_name'],
	'sname'=>$_POST['user_surname'],
	'email'=>$_POST['user_email'],
	'contact'=>$_POST['user_tel'],
	'b_year'=>$_POST['year'],
	'b_month'=>$_POST['month'],
	'b_day'=>$_POST['day'],
	'province'=>$_POST['user_location'],
	'e_updates'=>$e_updates,
	'date_time_stamp'=>date('Y-m-d H:i:s')
));



?>