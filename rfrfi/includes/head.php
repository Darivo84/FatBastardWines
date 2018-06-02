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
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="fatbastard, fat bastard, wine, south africa, stellenbosch, cape town, thierry and guy, live large, white, red, rose">
  <link rel="icon" href="<?php echo $base_path; ?>favicon.ico" type="image/x-icon">
<!--   <link rel="shortcut icon" href="<?php echo $base_path; ?>favicon-new.ico" type="image/x-icon"> -->
  <link rel="apple-touch-icon" href="<?php echo $base_path; ?>apple-touch-icon-precomposed.png" />
  <title>Fat Bastard Wines</title>
  <!-- <link rel="stylesheet" href="<?= $base_path; ?>css/fonts/font.css"> -->
  <link rel="stylesheet" href="<?= $base_path; ?>css/main.css">
  <link rel="stylesheet" href="<?= $base_path; ?>css/overrides.css">
  <link rel="stylesheet" href="<?= $base_path; ?>css/fonts/minion.css">
  <!-- <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/43842519-7207-4392-be50-bc9b5d66711d.css"/> -->
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" href="<?= $base_path; ?>css/all-ie-only.css" />
  <![endif]-->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="<?= $base_path; ?>css/ie8-and-down.css" />
  <![endif]-->
  <script src="<?= $base_path;?>scripts/jquery.js"></script>
  <!--[if lt IE 9]>
  <script>
  jQuery.find.selectors.attrHandle.type=function( elem ) {
  try{return elem.getAttribute( "type" );}catch(e){return'';}
  }
  </script>
  <script src="<?= $base_path; ?>scripts/ie8contact.js" language="javascript"></script>
  <![endif]-->
  <script src="<?= $base_path;?>scripts/jquery.cookie.js"></script>
  <script src="<?= $base_path;?>scripts/jquery.validate.min.js"></script>
  <script src="<?= $base_path;?>scripts/css_browser_selector.js"></script>


</head>
<body>

  <script>
  window.fbAsyncInit = function() {
  FB.init({
  appId      : '340697149457885',
  xfbml      : true,
  version    : 'v2.2'
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
  <script>
  var ara = "<?= $base_path; ?>" + 'ara.php';
  console.log(ara);
  </script>
