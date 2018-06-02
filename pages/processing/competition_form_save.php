<?php
$Name = Trim(stripslashes($_POST['user_name']));
$Surname = Trim(stripslashes($_POST['user_surname']));
$Birthday = $_POST['birth_day'] . "/" . $_POST['birth_month'] . "/" . $_POST['birth_year'];
$Email = Trim(stripslashes($_POST['user_email']));
$Tel = Trim(stripslashes($_POST['user_tel']));
$Location = Trim(stripslashes($_POST['user_location']));
$Answer = Trim(stripslashes($_POST['user_answer']));

if ($Answer == 'live_loud'){
		$User_answer = 'Tom and Jerry';
} else if ($Answer == 'lol'){
		$User_answer = 'LOL';
} else if ($Answer == 'live_large'){
		$User_answer = 'Live Large';
} else if ($Answer == 'linger_longer'){
		$User_answer = 'Linger Longer';
}

$EmailTo  = 'campaigns@fatbastardwine.co.za' . ', '; // note the comma
$EmailTo .= 'campaigns@baristawine.co.za';
// $EmailTo = 'kzj.kidd@gmail.com';
$EmailFrom = 'campaigns@fatbastardwine.co.za';
if(isset($_POST['user_subscribe'])){
	$Subscribe = 'Yes';
	}
	else{
		$Subscribe = 'No';
	}

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
$Body .= $Subscribe;
$Body .= "\n";
$Body .= "Date Of Birth: ";
$Body .= $Birthday;
$Body .= "\n";
$Body .= "Answer: ";
$Body .= $User_answer;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

include_once('../../includes/dbal/dlinc.php');
$dl = new DataLayer();
$dl->dbCon($dlhostname, $dlusername, $dlpassword, $dldbname);
$dl->debug = true;


$dl->insert('competition_form_oct_dec', array(
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
