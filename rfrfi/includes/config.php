<?php

$SERVER_ip = $_SERVER['HTTP_HOST'];
$base_path = '';

if($SERVER_ip=='192.168.1.127'){
	$base_path = 'http://192.168.1.127/Fat%20Bastard%20Wine/006%20-%20Development/02%20-%20Web%20(Dev)/';
}
elseif($SERVER_ip=='demo.designguru.co.za' || $SERVER_ip=='www.demo.designguru.co.za' || $SERVER_ip=='www.designguru.co.za/demo' || $SERVER_ip=='designguru.co.za/demo'){ //demo path
	$base_path = 'http://demo.designguru.co.za/fatbastard/web/v2/';
}
else{ //client
	$base_path = 'http://www.fatbastardwine.co.za/rfrfi/';
}
?>
