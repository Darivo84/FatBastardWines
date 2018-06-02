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
  console.log(ara);
  </script>
<?php
// $app_id = "1716177225264140";
// $app_secret = "be5326f80c021d9f8584ef2b78e3ef6f";
// $my_url = "https://www.fatbastardwine.co.za/pages/rovosrail_f.php"; // mainly should point to this page
// $perms_str = "user_birthday";

// $code = $_REQUEST["code"];

// if(empty($code)) {
//     $auth_url = "http://www.facebook.com/dialog/oauth?client_id="
//     . $app_id . "&redirect_uri=" . urlencode($my_url)
//     . "&scope=" . $perms_str;
//     echo("<script>top.location.href='" . $auth_url . "'</script>");
// }

// $token_url = "https://graph.facebook.com/oauth/access_token?client_id="
// . $app_id . "&redirect_uri=" . urlencode($my_url)
// . "&client_secret=" . $app_secret
// . "&code=" . $code;
// $access_token = file_get_contents($token_url);

// $graph_url = "https://graph.facebook.com/me?fields=birthday&" . $access_token;
// $result = json_decode(file_get_contents($graph_url));
// echo $result->birthday;
// exit;
?>
<script>
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



    <div class="main-content contact-copy competition-copy rovos_main_banner">
      
				
        <div class="middle">
        <p id="entry_heading">
        STAND TO WIN
        </p>
        <p class="small" id="entry_sub_heading">
        <i>A LUXURIOUS TRIP FOR TWO ABOARD</i>
        </p>
        <p id="rovos_heading">
        THE ROVOS RAIL
        </p>
        <hr id="rovos_line">
				<p class="small" id="sub_heading1">
					<span class="highlight">HERE'S YOUR CHANCE TO LIVE LARGE WITH FAT BASTARD</span>
				</p>
        <p class="small" id="rovos_part0">You could win an extravagant trip for two aboard Rovos Rail.</p>
        <p class="small" id="how_to_enter"><span class="highlight">HOW TO ENTER:</span></p>
        <p class="small" id="rovos_part1">Buy any FAT bastard wine and SMS the last 4 digits of the bottle barcode, your name and the first six digits
of your South African ID number to 34705</p>
        <p class="small" id="rovos_part2">Or, simply complete your details below. Online entries stand a chance of winning a case of FAT bastard
wine weekly.</p>

      </div>

      <div class="clearfix"></div>
    </div>
    <div class="contact-form competition-form">
      
      <div class="highlight" id="rovos_form_heading">FILL IN YOUR DETAILS<br>AND STAND A CHANCE TO <i>WIN!</i></div>
      <div id="form_div">
        <form id="competition_form" method="post" action="/pages/rovosrail_f_thankyou.php">
            <input type="text" name="first_name" placeholder="NAME*" required>
            <input type="text" name="last_name" placeholder="SURNAME*" required>
            <input type="email" name="email" placeholder="EMAIL*" required>
            <input type="text" name="mobile" placeholder="MOBILE NO.*" required>
            <div class="div_gender">
            <label>GENDER:</label>
              <input id="radio-1" class="radio-custom" name="gender" value="m" type="radio" style="width:50px;">
              <label for="radio-1" class="radio-custom-label">MALE</label>
                <input id="radio-2" class="radio-custom" name="gender" value="f" type="radio" style="width:50px;">
                <label for="radio-2" class="radio-custom-label">FEMALE</label>
            </div>
            <div class="div_birthday"><label>BIRTHDAY:</label><input type="text" id="datepicker" name='dob' placeholder="YYYY-MM-DD*" required></div>

            <br>
                    <div id="countries" class="row">
            <!-- <div class="th">Country</div> -->
            <select id="country_select" name="country"><option value="empty">COUNTRY</option>
              <option value="South Africa">South Africa</option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="American Samoa">American Samoa</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antarctica">Antarctica</option>
              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belarus">Belarus</option>
              <option value="Belgium">Belgium</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Bermuda">Bermuda</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Bouvet Island">Bouvet Island</option>
              <option value="Brazil">Brazil</option>
              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
              <option value="Brunei Darussalam">Brunei Darussalam</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cambodia">Cambodia</option>
              <option value="Cameroon">Cameroon</option>
              <option value="Canada">Canada</option>
              <option value="Cape Verde">Cape Verde</option>
              <option value="Cayman Islands">Cayman Islands</option>
              <option value="Central African Republic">Central African Republic</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Christmas Island">Christmas Island</option>
              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoros">Comoros</option>
              <option value="Congo">Congo</option>
              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
              <option value="Cook Islands">Cook Islands</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cote D&#039;ivoire">Cote D&#039;ivoire</option>
              <option value="Croatia">Croatia</option>
              <option value="Cuba">Cuba</option>
              <option value="Cyprus">Cyprus</option>
              <option value="Czech Republic">Czech Republic</option>
              <option value="Denmark">Denmark</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Dominican Republic">Dominican Republic</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egypt">Egypt</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Equatorial Guinea">Equatorial Guinea</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Estonia">Estonia</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
              <option value="Faroe Islands">Faroe Islands</option>
              <option value="Fiji">Fiji</option>
              <option value="Finland">Finland</option>
              <option value="France">France</option>
              <option value="French Guiana">French Guiana</option>
              <option value="French Polynesia">French Polynesia</option>
              <option value="French Southern Territories">French Southern Territories</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Germany">Germany</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Greece">Greece</option>
              <option value="Greenland">Greenland</option>
              <option value="Grenada">Grenada</option>
              <option value="Guadeloupe">Guadeloupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guernsey">Guernsey</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea-bissau">Guinea-bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haiti</option>
              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungary">Hungary</option>
              <option value="Iceland">Iceland</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
              <option value="Iraq">Iraq</option>
              <option value="Ireland">Ireland</option>
              <option value="Isle of Man">Isle of Man</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japan">Japan</option>
              <option value="Jersey">Jersey</option>
              <option value="Jordan">Jordan</option>
              <option value="Kazakhstan">Kazakhstan</option>
              <option value="Kenya">Kenya</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
              <option value="Korea, Republic of">Korea, Republic of</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Kyrgyzstan">Kyrgyzstan</option>
              <option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option>
              <option value="Latvia">Latvia</option>
              <option value="Lebanon">Lebanon</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Liberia">Liberia</option>
              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lithuania">Lithuania</option>
              <option value="Luxembourg">Luxembourg</option>
              <option value="Macao">Macao</option>
              <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Maldives">Maldives</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marshall Islands">Marshall Islands</option>
              <option value="Martinique">Martinique</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Mexico">Mexico</option>
              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
              <option value="Moldova, Republic of">Moldova, Republic of</option>
              <option value="Monaco">Monaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Myanmar">Myanmar</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Netherlands">Netherlands</option>
              <option value="Netherlands Antilles">Netherlands Antilles</option>
              <option value="New Caledonia">New Caledonia</option>
              <option value="New Zealand">New Zealand</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Niue">Niue</option>
              <option value="Norfolk Island">Norfolk Island</option>
              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
              <option value="Norway">Norway</option>
              <option value="Oman">Oman</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Palau">Palau</option>
              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
              <option value="Panama">Panama</option>
              <option value="Papua New Guinea">Papua New Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Peru</option>
              <option value="Philippines">Philippines</option>
              <option value="Pitcairn">Pitcairn</option>
              <option value="Poland">Poland</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Reunion">Reunion</option>
              <option value="Romania">Romania</option>
              <option value="Russian Federation">Russian Federation</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Saint Helena">Saint Helena</option>
              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
              <option value="Saint Lucia">Saint Lucia</option>
              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
              <option value="Samoa">Samoa</option>
              <option value="San Marino">San Marino</option>
              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
              <option value="Saudi Arabia">Saudi Arabia</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia">Serbia</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leone">Sierra Leone</option>
              <option value="Singapore">Singapore</option>
              <option value="Slovakia">Slovakia</option>
              <option value="Slovenia">Slovenia</option>
              <option value="Solomon Islands">Solomon Islands</option>
              <option value="Somalia">Somalia</option>
              <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
              <option value="Spain">Spain</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Sudan">Sudan</option>
              <option value="Suriname">Suriname</option>
              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
              <option value="Swaziland">Swaziland</option>
              <option value="Sweden">Sweden</option>
              <option value="Switzerland">Switzerland</option>
              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
              <option value="Taiwan, Province of China">Taiwan, Province of China</option>
              <option value="Tajikistan">Tajikistan</option>
              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
              <option value="Thailand">Thailand</option>
              <option value="Timor-leste">Timor-leste</option>
              <option value="Togo">Togo</option>
              <option value="Tokelau">Tokelau</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Turkey">Turkey</option>
              <option value="Turkmenistan">Turkmenistan</option>
              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Uganda">Uganda</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekistan">Uzbekistan</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Viet Nam">Viet Nam</option>
              <option value="Virgin Islands, British">Virgin Islands, British</option>
              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
              <option value="Wallis and Futuna">Wallis and Futuna</option>
              <option value="Western Sahara">Western Sahara</option>
              <option value="Yemen">Yemen</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <br class="clear-float">
        </div>

        <div id="provinces" class="row" style='display:none;'>
            <!-- <div class="th">Province</div> -->
            <select class="form-input form-select" id="province_select" name="province"></select>
            <br class="clear-float">
        </div>
        <div id="city" class="row" style='display:none;'>
            <!-- <div class="th">City</div> -->
                <select class="form-input form-select" id="city_select" name="city"></select>            
                <br class="clear-float">
        </div>
        <div id="suburb" class="row" style='display:none;'>
            <!-- <div class="th">Suburb</div> -->
                <select class="form-input form-select" id="suburb_select" name="suburb"></select>            
                <br class="clear-float">
        </div> 

            <div class="rovos_form_sub_heading">WHICH FAT BASTARD WINE IS YOUR FAVOURITE?</div>
            <div class="div_interests">
              <div>
                <input id="checkbox-1" class="checkbox-custom" name="interests[]" type="checkbox" value="chardonnay">
                <label for="checkbox-1" class="checkbox-custom-label">CHARDONNAY</label>
              </div>
              <div>
                <input id="checkbox-2" class="checkbox-custom" name="interests[]" type="checkbox" value="pinotage">
                <label for="checkbox-2" class="checkbox-custom-label">PINOTAGE</label>
              </div>
              <div>
                <input id="checkbox-3" class="checkbox-custom" name="interests[]" type="checkbox" value="pinot noir">
                <label for="checkbox-3" class="checkbox-custom-label">PINOT NOIR</label>
              </div>
              <div>
                <input id="checkbox-4" class="checkbox-custom" name="interests[]" type="checkbox" value="merlot">
                <label for="checkbox-4" class="checkbox-custom-label">MERLOT</label>
              </div>
            </div>
            <div class="div_interests">
              <div>
                <input id="checkbox-5" class="checkbox-custom" name="interests[]" type="checkbox" value="sauvignon blanc">
                <label for="checkbox-5" class="checkbox-custom-label">SAUVIGNON BLANC</label>
              </div>
              <div>
                <input id="checkbox-6" class="checkbox-custom" name="interests[]" type="checkbox" value="pinot noir rosé">
                <label for="checkbox-6" class="checkbox-custom-label">PINOT NOIR ROSÉ</label>
              </div>
              <div>
                <input id="checkbox-7" class="checkbox-custom" name="interests[]" type="checkbox" value="cabernet sauvignon">
                <label for="checkbox-7" class="checkbox-custom-label">CABERNET SAUVIGNON</label>
              </div>
              <div>
                <input id="checkbox-8" class="checkbox-custom" name="interests[]" type="checkbox" value="shiraz">
                <label for="checkbox-8" class="checkbox-custom-label">SHIRAZ</label>
              </div>
            </div>
            <div class="rovos_form_sub_heading">WHICH SOCIAL MEDIA CHANNELS DO YOU USE ON A REGULAR BASIS?</div>
            <div class="div_social_channels">
              <div>
                <input id="checkbox-9" class="checkbox-custom" name="social_channels[]" type="checkbox" value="facebook">
                <label for="checkbox-9" class="checkbox-custom-label">FACEBOOK</label>
              </div>
              <div>
                <input id="checkbox-10" class="checkbox-custom" name="social_channels[]" type="checkbox" value="twitter">
                <label for="checkbox-10" class="checkbox-custom-label">TWITTER</label>
              </div>
              <div>
                <input id="checkbox-11" class="checkbox-custom" name="social_channels[]" type="checkbox" value="instagram">
                <label for="checkbox-11" class="checkbox-custom-label">INSTAGRAM</label>
              </div>
              <div>
                <input id="checkbox-12" class="checkbox-custom" name="social_channels[]" type="checkbox" value="google+">
                <label for="checkbox-12" class="checkbox-custom-label">GOOGLE+</label>
              </div>
              <div>
                <input id="checkbox-13" class="checkbox-custom" name="social_channels[]" type="checkbox" value="youtube">
                <label for="checkbox-13" class="checkbox-custom-label">YOUTUBE</label>
              </div>
              <div>
                <input id="checkbox-14" class="checkbox-custom" name="social_channels[]" type="checkbox" value="whatsapp">
                <label for="checkbox-14" class="checkbox-custom-label">WHATSAPP</label>
              </div>
              <div>
                <input id="checkbox-15" class="checkbox-custom" name="social_channels[]" type="checkbox" value="pinterest">
                <label for="checkbox-15" class="checkbox-custom-label">PINTEREST</label>
              </div>
              <div>
                <input id="checkbox-16" class="checkbox-custom" name="social_channels[]" type="checkbox" value="wechat">
                <label for="checkbox-16" class="checkbox-custom-label">WECHAT</label>
              </div>
              <div>
                <input id="checkbox-17" class="checkbox-custom" name="social_channels[]" type="checkbox" value="snap chat">
                <label for="checkbox-17" class="checkbox-custom-label">SNAP CHAT</label>
              </div>
              <div>
                <input id="checkbox-18" class="checkbox-custom" name="social_channels[]" type="checkbox" value="i don't use social media">
                <label for="checkbox-18" class="checkbox-custom-label">I DON'T USE SOCIAL MEDIA</label>
              </div>
            </div>

            <div class="rovos_form_sub_heading">YES, I WOULD LIKE TO RECEIVE FAT BASTARD WINERY UPDATES VIA:</div>

            <input type="hidden" name="day_ara" id="day_ara" value="<?php echo $_SESSION['day']; ?>" />
            <input type="hidden" name="month_ara" id="month_ara" value="<?php echo $_SESSION['month']; ?>" />
            <input type="hidden" name="year_ara" id="year_ara" value="<?php echo $_SESSION['year']; ?>" />
            <div class="left_align">
              <div class="div_subscriptions">
                  <input id="opt_in_email" class="checkbox-custom" name="opt_in_email" type="checkbox" value="1" style="width:50px;">
                  <label for="opt_in_email" class="checkbox-custom-label">EMAIL</label>
              </div>
              <div class="div_subscriptions">
                  <input id="opt_in_sms" class="checkbox-custom" name="opt_in_sms" type="checkbox" value="yes" style="width:50px;">
                  <label for="opt_in_sms" class="checkbox-custom-label">SMS</label>
              </div>
            </div>

            <div class="div_over_18 left_align">
                <input id="accept_terms" class="checkbox-custom left_align" name="accept_terms" type="checkbox" value="1" required>
                <label for="accept_terms" class="checkbox-custom-label">I AM OVER 18 AND HAVE READ AND <br><span class="padleft35">ACCEPT THE <a href="/tandc.html" target="_blank" class="highlight underline">TERMS & CONDITIONS.</a></span></label>
                <div class="errordiv"></div>
            </div>
            <div class="div_over_18_mobile left_align">
                <input id="accept_terms_mobile" class="checkbox-custom left_align" name="accept_terms" type="checkbox" value="1" required>
                <label for="accept_terms_mobile" class="checkbox-custom-label">I AM OVER 18 AND HAVE READ <br><span class="padleft35">AND ACCEPT THE </span><br><span class="padleft35"><a href="/tandc.html" target="_blank" class="highlight underline">TERMS & CONDITIONS.</a></span></label>
                <div class="errordiv"></div>
            </div>
            <input type="image" src="/pages/rovosrail/images/submit.png" border="0" alt="Submit" id="rovos_submit_btn"/>  
      </form>
      </div>
    </div>
    </div>

		<div>
		<div class="contact-info">
			<div class="fancybox"><p id="success" style="color:#EAB332;"></p></div>
		</div>
		</div>

<script>

    $('#country_select').bind("change",function() {
        set_province();
    });

    $('#province_select').bind("change",function() {
        set_city();
    });

    $('#city_select').bind("change",function() {
        set_suburb();
    });

 function set_province()
 {
    $.getJSON("https://fb-node.optimalonline.co.za/provinces/"+$('#country_select').val(), function(data){
        $('#province_select').empty();
        $('#city_select').empty();
        $('#suburb_select').empty();


            if(jQuery.isEmptyObject(data))
            {
                $("#provinces").hide();
                $("#city").hide();
                $("#suburb").hide();
            }
            else
            {
                $("#provinces").show();
                $.each(data, function(key, value) {
                  if(key==0)
                    $('#province_select').append($('<option />').attr("value", key).text('PROVINCE'));
                  else
                    $('#province_select').append($('<option />').attr("value", key).text(value));
                    set_city();
                });
            }
        });
 }

 function set_city()
 {
    $.getJSON("https://fb-node.optimalonline.co.za/cities/"+$('#province_select').val(), function(data){
        $('#city_select').empty();
        $('#suburb_select').empty();

            if(jQuery.isEmptyObject(data))
            {
                $("#city").hide();
                $("#suburb").hide();
                 // alert('1');
            }
            else
            {
                $("#city").show();
                $.each(data, function(key, value) {
                    if(value == "")
                        $('#city_select').append($('<option selected="selected"/>').attr("value", key).text(value));
                    else
                    {
                      if(key==0)
                        $('#city_select').append($('<option/>').attr("value", key).text('CITY'));
                      else
                        $('#city_select').append($('<option/>').attr("value", key).text(value));
                    }
                });
            }
            set_suburb();
    });
 }

 function set_suburb()
 {
    $.getJSON("https://fb-node.optimalonline.co.za/suburbs/"+$('#city_select').val(), function(data){
        $('#suburb_select').empty();
        if(jQuery.isEmptyObject(data))
            {
                $("#suburb").hide();
            }
            else
            {
                $("#suburb").show();
                $.each(data, function(key, value) {
                if(value == "")
                    $('#suburb_select').append($('<option selected="selected"/>').attr("value", key).text(value));
                else
                {
                  if(key==0)
                    $('#suburb_select').append($('<option/>').attr("value", key).text('SUBURB'));
                  else
                    $('#suburb_select').append($('<option/>').attr("value", key).text(value));
                }
                });
            }
        });
 }
      
$( document ).ready(function() {
    set_province();
    // $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd",
      yearRange: "1900:2016"
      });
    
    $("#competition_form").validate({
      errorPlacement: function(error, element) {
        // error.appendTo('#errordiv');
        if (element.attr("name") == "accept_terms" )
            error.insertAfter(".errordiv");
        else
            error.insertAfter(element);
      },
      submitHandler: function(form) {
        form.submit();
      }
 });

    });
// $( ".selector" ).datepicker({
//   dateFormat: "yy-mm-dd"
// });
  //   $(function() {
  //   $( "#datepicker" ).datepicker();
  //   $( "#format" ).change(function() {
  //     // $( "#datepicker" ).datepicker( "option", "dateFormat", "DD, d MM, yy" );
  //     $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  //   });
  // });
// });

</script>


  </div>
<!-- end #page -->
<footer>

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

</body>
</html>
