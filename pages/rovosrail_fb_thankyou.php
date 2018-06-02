<?php

//social channels and interests should only include those options selected and should be lowercase
$social_channel = $_POST['social_channels'];
$interests = $_POST['interests'];
$fields['first_name'] = $_POST['first_name'];
$fields['last_name'] = $_POST['last_name'];
$fields['email'] = $_POST['email'];
$fields['mobile']=$_POST['mobile'];
$fields['dob']=$_POST['dob'];
$fields['gender']=$_POST['gender'];
$fields['opt_in_email'] = $_POST['opt_in_email'];
$fields['opt_in_sms'] = $_POST['opt_in_sms'];
$fields['country']=$_POST['country'];
$fields['province']=$_POST['province'];
$fields['city']=$_POST['city'];
$fields['suburb']=$_POST['suburb'];
$fields['interaction_type'] = 'enter';  //This is a change from the previous version
$fields['interaction_source'] = 'facebook';
$fields['return_id'] = 0; 
if($_POST['accept_terms'] == 1)
	$fields['additional_info']="Terms Accepted: Yes";
else
	$fields['additional_info']="Terms Accepted: No";
$fields['id'] = '89b0aad3-ed11-11e5-9e19-001e676a4028'; //this is the unique form ID for robertson winery.

foreach($social_channel as $key=>$value)
	$fields["social_channel[$key]"]=$value;

foreach($interests as $key=>$value)
	$fields["interest[$key]"]=$value;

// echo '<pre>';
// var_dump($fields);
// exit;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://fb-node.optimalonline.co.za/form/consumer");
// curl_setopt($ch, CURLOPT_URL,"http://fb-node.node.local/form/consumer");
curl_setopt($ch, CURLOPT_REFERER, 'http://www.fatbastardwine.co.za');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$user_id = curl_exec ($ch);
curl_close ($ch);
// echo 'User ID: '.$user_id;

?>
<?php
	include '../includes/config.php';
	include '../includes/head.php';
?>
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/pages/rovosrail/css/rovosrail.css">
  <script>
    // if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
    //   $(location).attr('href', ara);
    // }
  </script>
  <?php 
  include '../includes/header_nav_rovosrail.php'; 
  ?>
    <div class="main-content contact-copy competition-copy rovos_thankyou_banner">
    <div id="rovos_hippo_left" class="left-container">
        <!-- <div class="hippo-large">
          <img src="/pages/rovosrail/images/hippo.png" alt="">
        </div> -->
        <div id="rovos_train">
	    	<img src="/pages/rovosrail/images/train.png">
	    </div>
<!--       </div>
     
    <div id="rovos_hippo_right" class="home-container"> -->
    <div id="thank_you_copy_container">
    <div id="rovos_thank_you_copy">
    THANK YOU!
    <hr id="rovos_line_thank_you">
    <div id="rovos_social_copy">
    Share via: <span class="rovos_social"><a href="http://twitter.com/intent/tweet?text=I have just entered the FAT bastard Rovos Rail Competition.http%3A%2F%2Fwww.fatbastardwine.co.za%2F" target="_blank" name="share_twitter" id="share_twitter"><img src="/pages/rovosrail/images/twitter.png"></a>

<a name="share_facebook" id="share_facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="https://www.facebook.com/dialog/feed?link=http%3A%2F%2Fwww.fatbastardwine.co.za%2F&amp;picture=http://fatbastard.optimalonline.co.za/pages/rovosrail/images/fb_share.png&amp;name=FAT bastard Rovos Rail Competition&amp;caption=%20FAT bastard&amp;description=Simply click on this  post to enter the competition and stand a chance of winning a case of FAT bastard wine weekly!
&amp;redirect_uri=http%3A%2F%2Fwww.facebook.com%2F">
                <img src="/pages/rovosrail/images/fb.png">
              </a>

    </span>
    </div>
    <div id="rovos_visit_website_copy"><a href="http://www.fatbastardwine.co.za/" id="visit_website" target="_blank">Come visit our website!</a></div>
    </div>
    </div>
    </div>
    </div>


<?php
include '../includes/footer_rovosrail.php';
?>