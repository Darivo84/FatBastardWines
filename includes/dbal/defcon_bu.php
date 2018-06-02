<?php
$SERVER_ip = $_SERVER['HTTP_HOST'];

if($SERVER_ip=='192.168.1.127'){
	$dlusername="root";
	$dlpassword="dg";
	$dlhostname="localhost";
	$dldbname="fat_bastard";
}

elseif($SERVER_ip=='demo.designguru.co.za'){
	$dlusername="designgu_fat";
	$dlpassword="21a32b43c";
	$dlhostname="localhost";
	$dldbname="designgu_fatbastard";
}
else{
	$dlusername="designgu_fat";
	$dlpassword="21a32b43c";
	$dlhostname="localhost";
	$dldbname="designgu_fatbastard";
}
?>