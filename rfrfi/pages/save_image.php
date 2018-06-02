<?php

$current_date=date("Y-m-d-H:i:s");  

//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
//Decode the string
$unencodedData=base64_decode($filteredData);
//Save the image
file_put_contents('../user_images/'.$current_date.'_img.png', $unencodedData);
$user_image = '../user_images/'.$current_date.'_img.png';
$user_image_share = 'https://innervigorating.com/user_images/'.$current_date.'_img.png';



?>