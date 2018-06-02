<?php

$SERVER_ip = $_SERVER['HTTP_HOST'];
$base_path = '';
if($SERVER_ip=='197.221.14.97'){
	$base_path = 'http://www.fatbastardwine.co.za/';
}
elseif($SERVER_ip=='demo.designguru.co.za' || $SERVER_ip=='www.demo.designguru.co.za' || $SERVER_ip=='www.designguru.co.za/demo' || $SERVER_ip=='designguru.co.za/demo'){ //demo path
	$base_path = 'http://demo.designguru.co.za/fatbastard/facebook-competition/';
}
elseif($SERVER_ip=='tagstream.in'){ //demo path
	$base_path = 'https://tagstream.in/fatbastard/facebook-competition/';
}
else{ //client
	$base_path = 'http://www.fatbastardwine.co.za/';
}
?>
