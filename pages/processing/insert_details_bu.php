<?php


include_once('../../includes/dbal/dlinc.php');
include_once('../../includes/settings.php');
$dl = new DataLayer();
$dl->dbCon($dlhostname, $dlusername, $dlpassword, $dldbname);
$dl->debug = false;



$e_updates='';
if(isset($_POST['user_subscribe_email'])){ $e_updates = 1; }else{ $e_updates = 0; }
$m_updates='';
if(isset($_POST['user_subscribe_mobile'])){ $m_updates = 1; }else{ $m_updates = 0; }

$dl->insert('user_details', array(
	'fname'=>$_POST['user_name'],
	'sname'=>$_POST['user_surname'],
	'email'=>$_POST['user_email'],
	'contact'=>$_POST['user_tel'],
	'b_year'=>$_POST['birth_year'],
	'b_month'=>$_POST['birth_month'],
	'b_day'=>$_POST['birth_day'],
	'province'=>$_POST['user_location'],
	'e_updates'=>$e_updates,
	'm_updates'=>$m_updates
));



?>