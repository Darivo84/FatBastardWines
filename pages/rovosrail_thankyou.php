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
$fields['interaction_source'] = 'web';
$fields['return_id'] = 0; 
if($_POST['accept_terms'] == 1)
	$fields['additional_info']="Terms Accepted: Yes";
else
	$fields['additional_info']="Terms Accepted: No";
$fields['id'] = '52ea4ef3-e452-11e5-9e19-001e676a4028'; //this is the unique form ID for robertson winery.

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
	$SERVER_ip = $_SERVER['HTTP_HOST'];
$base_path = '';

if($SERVER_ip=='197.221.14.97'){
  $base_path = 'http://www.fatbastardwine.co.za/';
}
elseif($SERVER_ip=='demo.designguru.co.za' || $SERVER_ip=='www.demo.designguru.co.za' || $SERVER_ip=='www.designguru.co.za/demo' || $SERVER_ip=='designguru.co.za/demo'){ //demo path
  $base_path = 'http://demo.designguru.co.za/fatbastard/web/v4/';
}
else{ //client
  $base_path = 'http://www.fatbastardwine.co.za/';
}
	
?>
<?php
error_reporting(0);

session_start();
  if(!isset($_SESSION['day'])){

  $_SESSION['day']=$_GET['day'];
  $_SESSION['month']=$_GET['month'];
  $_SESSION['year']= $_GET['year'];
  $_SESSION['userLocation']=$_GET['userLocation'];
}
  $_SESSION['user_name']=$_POST['user_name'];
  $_SESSION['user_surname']=$_POST['user_surname'];
  $_SESSION['user_email']=$_POST['user_email'];
  $_SESSION['user_tel']=$_POST['user_tel'];
?>
<!-- <html> -->
<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" >
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="fatbastard, FAT bastard, wine, south africa, stellenbosch, cape town, thierry and guy, live large, white, red, rose">
  <link rel="icon" href="<?php echo $base_path; ?>favicon.ico" type="image/x-icon">
<!--   <link rel="shortcut icon" href="<?php echo $base_path; ?>favicon-new.ico" type="image/x-icon"> -->
  <link rel="apple-touch-icon" href="<?php echo $base_path; ?>apple-touch-icon-precomposed.png" />
  <title>FAT bastard Wines</title>
  <!-- <link rel="stylesheet" href="<?= $base_path; ?>css/fonts/font.css"> -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/overrides.css">
  <link rel="stylesheet" href="/css/fonts/minion.css">
  <!-- <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/43842519-7207-4392-be50-bc9b5d66711d.css"/> -->
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" href="<?= $base_path; ?>css/all-ie-only.css" />
  <![endif]-->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="<?= $base_path; ?>css/ie8-and-down.css" />
  <![endif]-->
  <script src="/scripts/jquery.js"></script>
  <!--[if lt IE 9]>
  <script>
  jQuery.find.selectors.attrHandle.type=function( elem ) {
  try{return elem.getAttribute( "type" );}catch(e){return'';}
  }
  </script>
  <script src="<?= $base_path; ?>scripts/ie8contact.js" language="javascript"></script>
  <![endif]-->
  <script src="/scripts/jquery.cookie.js"></script>
  <script src="/scripts/jquery.validate.min.js"></script>
  <script src="/scripts/css_browser_selector.js"></script>


</head>
<body>

  <script>
  var ara = "<?= $base_path; ?>" + 'ara.php';
  // console.log(ara);
  </script>

<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/pages/rovosrail/css/rovosrail.css">
  <script>
    // if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
    //   $(location).attr('href', ara);
    // }
  </script>
  <?php ob_start(); ?>
<div id="overlay"></div>
<div id="Top"></div>
<div class="nav-container">
  <nav class="social-nav">
<!-- <ul class="social desktop">
      <li>BE SOCIAL WITH US</li>
      <li><a href="<?php echo $base_path; ?>pages/news-signup.php"><img src="<?= $base_path; ?>elements/newsletter-icon-2x.png" alt="" width="32"></a></li>
      <li><a target="_blank" href="https://www.facebook.com/FATbastardWineSA"><img src="<?= $base_path; ?>elements/facebook-icon-2x.png" alt="" width="32"></a></li>
      <li><a target="_blank" href="https://twitter.com/FATbastardSA"><img src="<?= $base_path; ?>elements/twitter-icon-2x.png" alt="" width="32"></a></li>
</ul> -->
  </nav>
</div>
<div class="nav-container">
<div class="nav">
<nav class="navigation-nav">
  <button class="mm-toggle"></button>
  <!-- <div class="mobile-nav" id="mobile-menu"> -->
    <!-- <ul> -->
      <!-- <li><a class="home" alt="Home" href="<?= $base_path;?>index.php">HOME</a></li>
      <li><a class="live-large" alt="Live Large" href="<?= $base_path;?>pages/live_large.php">LIVE LARGE</a></li>
      <li><a class="bastards" alt="The FAT bastards" href="<?= $base_path;?>pages/the_fat_bastards.php">THE FAT BASTARDS</a></li>
      <li><a class="get-in-touch" alt="Get In Touch" href="<?= $base_path;?>pages/contact.php">GET IN TOUCH</a></li>
      <li><a class="vib" alt="The Very Important Bastards" href="<?= $base_path;?>pages/very_important_bastards.php">VIB</a></li>
       -->
      <!-- <li><a target="_blank" href="https://www.facebook.com/FATbastardWineSA">JOIN FAT bastard ON FACEBOOK </a></li> -->
            <!-- <li class="mobile-links"><a href="<?php echo $base_path; ?>pages/news-signup.php"><img src="<?= $base_path; ?>elements/newsletter-icon-2x.png" alt="" width="29"></a>
            <a target="_blank" href="https://www.facebook.com/FATbastardWineSA"><img src="<?= $base_path; ?>elements/facebook-icon-2x.png" alt="" width="29"></a>
            <a target="_blank" href="https://twitter.com/FATbastardSA"><img src="<?= $base_path; ?>elements/twitter-icon-2x.png" alt="" width="29"></a></li>
      </ul> -->

  <!-- </div> -->
  <a alt="Home" href="<?= $base_path;?>index.php"><div class="hippo"></div></a>
  <div class="header-nav">
    <ul class="navigation">


    </ul>
  </div>
</nav>
</div>
<div class="clearfix"></div>
</div>
<div id="page">
<?php 
if(isset($_SESSION['yes']) || isset($_SESSION['vib']) || isset($_SESSION['vib-home']))
{
if(isset($_GET['end']))
{
  unset($_SESSION['yes']);
  unset($_SESSION['vib']);
  unset($_SESSION['vib-home']);
  session_unset();
  session_destroy();
  header("location:".$base_path."index.php");
}

} 
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

<!-- <a name="share_facebook" id="share_facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="https://www.facebook.com/dialog/feed?link=http%3A%2F%2Fwww.fatbastardwine.co.za%2F&amp;picture=https://www.fatbastardwine.co.za/pages/rovosrail/images/fb_share.png&amp;name=FAT bastard Rovos Rail Competition&amp;caption=%20FAT bastard&amp;description=Simply click on this  post to enter the competition and stand a chance of winning a case of FAT bastard wine weekly!
&amp;redirect_uri=http%3A%2F%2Fwww.facebook.com%2F">
                <img src="/pages/rovosrail/images/fb.png">
              </a> -->
              <a name="share_facebook" id="share_facebook">
                <img src="/pages/rovosrail/images/fb.png">
              </a>

    </span>
    </div>
    <div id="rovos_visit_website_copy"><a href="http://www.fatbastardwine.co.za/" id="visit_website">Visit our website!</a></div>
    </div>
    </div>
    </div>
    </div>
</div>
<!-- end #page -->
<footer>
<div class="footer-nav">
  <ul>
    <li><a class="home" alt="Home" href="<?= $base_path; ?>index.php">HOME</a> | </li>
    <li><a class="live-large" alt="Live Large" href="<?= $base_path; ?>pages/live_large.php">LIVE LARGE</a> | </li>
    <li><a class="bastards" alt="The FAT bastards" href="<?= $base_path; ?>pages/the_fat_bastards.php">THE FAT BASTARDS</a> | </li>
    <li><a class="get-in-touch" alt="Get In Touch" href="<?= $base_path; ?>pages/contact.php">GET IN TOUCH</a> | </li>
    <!-- <li><a class="tandc-mav" alt="Terms and Conditions" href="http://www.fatbastardwine.co.za/tandc.html" target="_blank">TERMS &AMP; CONDITIONS</a></li> -->
    <li><a class="tandc-mav" alt="Terms and Conditions" href="<?= $base_path; ?>tandc.html" target="_blank">TERMS &AMP; CONDITIONS</a></li>
  </ul>
</div>
<div class="copyright">
  <div class="copyright-inner">
    <p><i class="fa fa-copyright"></i> 2015 FAT bastard. South Africa. All rights reserved
    <span class="hide-mobile">
<span class="divider">|</span>
          Website by <a target="_blank" href="http://www.optimalonline.co.za">Optimal Online </a></span>
        </p>
    <a target="_blank" href="http://www.ara.co.za">
      <img class="ara-img" src="<?php echo $base_path;?>elements/ara.png" alt="">
    </a>
  </div>

</div>
</footer>
<script src="<?= $base_path;?>scripts/jquery-ui.custom.js"></script>
<script src="<?= $base_path;?>scripts/jquery.mobile-menu.js"></script>
<script src="<?= $base_path;?>scripts/navtabs.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.pack.js"></script>
<script src="<?= $base_path;?>scripts/placeholder.min.js"></script>

<script src="<?= $base_path;?>scripts/jquery.tinycolorpicker.js"></script>
<script src="<?= $base_path;?>scripts/smooth-scroll.js"></script>
<script src="<?= $base_path;?>scripts/jquery.validate.js"></script>
<script src="<?= $base_path;?>scripts/html2canvas.js"></script>

<script src="<?= $base_path;?>scripts/gevann.js"></script>

<script src="<?= $base_path;?>scripts/jquery.fancybox.js"></script>
<script src="<?= $base_path;?>scripts/postcard.js"></script>
<script src="<?= $base_path;?>scripts/theme.js"></script>
<script src="<?= $base_path;?>scripts/postcard-desktop-ui.js"></script>

<script>
$('input, textarea').placeholder();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61835092-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10404058;
var sc_invisible=1;
var sc_security="c8ee0ffd";
var sc_https=1;
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="website
statistics" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10404058/0/c8ee0ffd/1/"
alt="website statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
<script language='JavaScript1.1' src='//pixel.mathtag.com/event/js?mt_id=987603&mt_adid=116130&v1=&v2=&v3=&s1=&s2=&s3='></script>
<script>

    $('#share_facebook').on('click', function(){
      FB.ui({
            method: 'share',
            href: 'https://www.fatbastardwine.co.za/pages/rovosrail.php',
        });
    });


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1716177225264140',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1129126350454540');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1129126350454540&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</body>
</html>
