<?php
$SERVER_ip = $_SERVER['HTTP_HOST'];

if($SERVER_ip=="192.168.0.100"){
	$dlusername="root";
	$dlpassword="dg";
	$dlhostname="localhost";
	$dldbname="fat_bastard";
}
elseif($SERVER_ip=="fatbastardwine.co.za" || "www.fatbastardwine.co.za"){
	$dlusername="fatbaxmwks_1_w";
	$dlpassword="Wc1d5qr8";
	$dlhostname="sql13.cpt4.host-h.net";
	$dldbname="fatbaxmwks_db1";
}
elseif($SERVER_ip=='localhost:8080' || $SERVER_ip=='127.0.0.1:8080'){
	$dlusername="admin";
	$dlpassword="admin";
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
	$dlusername="fatbaxmwks_1";
	$dlpassword="tF7t2j68";
	$dlhostname="localhost";
	$dldbname="fatbaxmwks_db1";
}
?>