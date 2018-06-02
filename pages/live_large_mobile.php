<div class="live-large-container mobile-live-large">
	<div>
		<!-- Tab panes -->
		<div class="section-header header-create"><h1> <span class="smaller">01.</span> Create</h1></div>
		<!--create-->
		<div class="live-large-content create " id="create">
			<div class="top">
				<h1>Living Large</h1>
				<div class="left-right">
					<div class="left">
						<!-- <img src="../elements/hippo_postcard.png" alt=""> -->
					</div>
					<div class="right">
						<p>FAT bastard is about living life to your heart's content. Here's an easy way you can do just that and share with family and friends every day.
						</p>
						<p>
						Simply complete the form with your name and other details. Then choose an artwork and design that captures your spirit for the day, add a message (or create your own) and voila! A glorious artwork you can download, email to friends or share on social media.</p>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="button-container">
					<a  id="create-next-mobile" aria-controls="create" role="tab" data-toggle="tab">
						<button class="gold">Next</button>
					</a>
				</div>
			</div>
		</div>
		<!-- details -->
		<div class="section-header header-details"><h1> <span class="smaller">02.</span> Details</h1></div>
		<div  class="live-large-content details  " id="details-mobile">
			<form id="livelargeformmobile" method="post">
				<div class="top">
					<h1>To start, please complete the form</h1>
					<div class="left">
						<h2>Who Might You Be?</h2>
						<div class="left">
							<input class="text-input" placeholder="NAME *" type="text" name="user_name" id="user_name" required /></input>
						</div>
						<div class="right">
							<input class="text-input" placeholder="SURNAME *" type="text" name="user_surname" id="user_surname" required /></input>

						</div>
						<input class="text-input" placeholder="EMAIL *" type="email" name="user_email" id="user_email" required /></input>
						<input class="text-input" placeholder="CONTACT NUMBER *" type="text" name="user_tel" id="user_tel" required /></input>
										<input type="hidden" name="day" id="day" value="<?php echo $_SESSION['day']; ?>"/>
										<input type="hidden" name="month" id="month" value="<?php echo $_SESSION['month']; ?>" />
										<input type="hidden" name="year" id="year" value="<?php echo $_SESSION['year']; ?>" />
										<input type="hidden" name="user_location" id="user_location" value="<?php echo $_SESSION['userLocation']; ?>" />

						<div class="clearfix"></div>
						<!-- <h2>When is your birthday?</h2> -->
						<!-- <?php include '../includes/page_pieces/dob.php'; ?> -->
						<div class="clearfix"></div>
					</div>
					<div class="right">
						<!-- <h2>Where Are You From?</h2> -->
						<!-- 	<div class="user-location-wrapper">
							<select name="user_location" id="user_location" required>
										<option value="" selected>Select *</option>
										<option value="Eastern Cape">Eastern Cape</option>
										<option value="Free State">Free State</option>
										<option value="Gauteng">Gauteng</option>
										<option value="Kwazulu-Natal">Kwazulu-Natal</option>
										<option value="Limpopo">Limpopo</option>
										<option value="Mpumalanga">Mpumalanga</option>
										<option value="North West">North West</option>
										<option value="Northern Cape">Northern Cape</option>
										<option value="Western Cape">Western Cape</option>
										<option value="International">International</option>
							</select>
						</div> -->
						<div class="clearfix"></div>
						<!-- <h2>Recieve Updates Via</h2> -->
						<!-- <div class="updates-container">
									<div class="subscribe-cont">
												<div class="squaredTwo squaredTwo-email">
															<input type="checkbox"  checked="checked" id="squaredTwo-email-mobile" name="user_subscribe_email" />
															<label for="squaredTwo-email-mobile"></label>
												</div>
												<p class="user-subscribe_email">EMAIL</p>
									</div>
									<div class="subscribe-cont">
												<div class="squaredTwo squaredTwo-mobile">
															<input type="checkbox"  checked="checked" id="squaredTwo-mobile-mobile" name="user_subscribe_mobile" />
															<label for="squaredTwo-mobile-mobile"></label>
												</div>
												<p class="user-subscribe_mobile">MOBILE</p>
									</div>
						</div> -->

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="bottom">
					<div class="updates-container">
						<div class="confirm-cont">
							<div class="squaredTwo squaredTwo-conditions">
								<input type="checkbox" value="" id="squaredTwo-conditions" name="user_conditions" />
								<label for="squaredTwo-conditions"></label>
							</div>
							<p class="consent user-conditions">Do you consent to FAT bastard keeping in touch?</p>
							<div class="clearfix"></div>
						</div>
						<div class="right">


						</div>
					</div>
					<div class="button-container">
						<a  id="details-next-mobile" aria-controls="details" role="tab" data-toggle="tab">
							<button type="submit" name="submit" class="gold">Send</button>
						</a>
					</div>
				</div>
			</form>
		</div>
		<!-- occasion -->
		<div class="section-header header-occasion"><h1> <span class="smaller">03.</span> Occasion</h1></div>
		<div  class="live-large-content occasion" id="occasion-mobile">
			<div class="top">
				<h1 class="occassion-heading">Choose From One Of These Postcard Designs</h1>
				<div class="postcard-eg-container">
					<div class="postcard-eg" id="1">
						<img src="../elements/postcards/postcard_1.jpg" alt="">
					</div>
					<div class="postcard-eg" id="2">
						<img src="../elements/postcards/postcard_2.jpg" alt="">
					</div>
					<div class="postcard-eg" id="3">
						<img src="../elements/postcards/postcard_3.jpg" alt="">
					</div>
					<div class="postcard-eg" id="4">
						<img src="../elements/postcards/postcard_4.jpg" alt="">
					</div>
					<div class="postcard-eg" id="5">
						<img src="../elements/postcards/postcard_5.jpg" alt="">
					</div>
					<div class="postcard-eg" id="6">
						<img src="../elements/postcards/postcard_6.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="bottom">
				<p>If you are happy with your postcard choice, please proceed.</p>
				<div class="button-container">
					<a  id="occasion-next-mobile" aria-controls="occasion" role="tab" data-toggle="tab">
						<button class="gold">Next</button>
					</a>
				</div>
			</div>
		</div>
		<!-- design -->
		<div class="section-header header-design"><h1> <span class="smaller">04.</span> Design</h1></div>
		<div  class="live-large-content design " id="design-mobile">
			<div class="top">
				<h1 >Design Your Postcard.</h1>
				<div class="left-right">
					<div id="postcard-mobile" class="postcard-mobile left">
					</div>
					<div class="right">
						<p>Heading</p>
						<input class="text-input user-heading-input" placeholder="Type Heading Here" type="text" name="user_heading"  maxlength="30" required />
						<p>Message</p>
						<textarea name="user_message_postcard" placeholder="Type Message Here" id="bodyCopy" class="editor body-copy-input" rows="10" maxlength="170"></textarea>
						<div class="left color-left-panel">
							<div class="picker-left-panel">
								<img height="150" width="150" src="../elements/text-color-smaller_2.png" alt="" class="leftColor" />
								<div id="result_test"></div>
							</div>
							<span class="color-left-text"><div class="left-color"></div><p>Left Panel</p></span>
						</div>
						<div class="right color-left-panel">
							<div class="picker-right-panel">
								<img height="150" width="150" src="../elements/text-color-smaller.png" alt="" class="rightColor" />
								<div id="result_test"></div>
							</div>
							<span class="color-right-text"><div class="right-color"></div><p>Right Panel</p></span>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom">
				<p>If you are happy with your postcard design, please proceed.</p>
				<div class="button-container">
					<a  class="design-next-mobile" id="design-next-mobile" aria-controls="design" role="tab" data-toggle="tab">
						<button  class="gold">Next</button>
					</a>
				</div>
			</div>
		</div>
		<!-- share -->
		<div class="section-header header-share"><h1> <span class="smaller">05.</span> Share</h1></div>
		<div  class="live-large-content share" id="share-mobile">

			<div class="top">
				<h1>Share Your Postcard</h1>
				<div class="left-right img_share">
				</div>
			</div>
			<div class="bottom">
				<p>If you are happy with your personalised postcard, please share.</p>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<style type="text/css">
@media only screen and (max-width: 1050px){
	.right .left-color {
background-color: #960048;
}
.right .left-color, .right .right-color {
width: 22px;
height: 22px;
border-radius: 3px;
margin-right: 10px;
float: left;
}
.right .right-color {
background-color: #780E36;
}
.right .left-color, .right .right-color {
width: 22px;
height: 22px;
border-radius: 3px;
margin-right: 10px;
float: left;
}
}
</style>
</div>
<!-- end #page -->
<div class="mobile-live-large">
<footer>
<div class="footer-nav">
<ul>
	<li><a class="home" alt="Home" href="<?= $base_path; ?>index.php">HOME</a> | </li>
	<li><a class="live-large" alt="Live Large" href="<?= $base_path; ?>pages/live_large.php">LIVE LARGE</a> | </li>
	<li><a class="bastards" alt="The FAT bastards" href="<?= $base_path; ?>pages/the_fat_bastards.php">THE FAT BASTARDS</a> | </li>
	<li><a class="get-in-touch" alt="Get In Touch" href="<?= $base_path; ?>pages/contact.php">GET IN TOUCH</a> | </li>
	<li><a class="tandc-mav" alt="Terms and Conditions" target="_blank" href="http://www.fatbastardwine.co.za/tandc.html">TERMS &AMP; CONDITIONS</a></li>
</ul>
</div>
<div class="copyright">
<div class="copyright-inner">
	<p><i class="fa fa-copyright"></i> 2015 FAT bastard. South Africa. All rights reserved
		<span class="hide-mobile">
			<span class="divider">|</span>
					Website by <a target="_blank" href="http://designguru.co.za">Design Guru </a>&amp; <a target="_blank" href="http://www.derrickcapetown.com/">Derrick</a></span>
		</p>
		<a target="_blank" href="http://www.ara.co.za">
			<img class="ara-img" src="<?php echo $base_path;?>elements/ara.png" alt="">
		</a>
	</div>
</div>

	<div id="araModal" class="ara_modal">

	  <!-- Modal content -->
	  <div class="ara_model_outer_border">
	    <div class="ara_modal-content">
	      <div class="ara_top">
	        <div class="ara_hippo"></div>
	      </div>
	      <div class="ara_copy">
	        <div class="ara-copy">
	          <p>To enjoy FAT bastard, you need to be able to <span class="highlight">LIVE LIKE ONE</span>. <br> Living <span class="highlight" style="font-size: 28px;">LARGE</span> requires a salubrious take on the good life. </p>
	          <div class="spacer"></div>
	          <p><i>It comes with <span class="highlight">experience</span> so if you're not there yet, keep at it.</i></p>
	        </div>

	        <div class="ara_born">
	          <h2>When were you born?</h2>
	          <form id="age_form" name="age_form">

	            <p class="ara_age_not">You are not old enough to enter this site.</p>

	            <select id="ara_daydropdown" name="ara_birth_day" class="ara_input" required="">
	              <option value="" selected="">DAY *</option>
	              <option value="1">1</option>
	              <option value="2">2</option>
	              <option value="3">3</option>
	              <option value="4">4</option>
	              <option value="5">5</option>
	              <option value="6">6</option>
	              <option value="7">7</option>
	              <option value="8">8</option>
	              <option value="9">9</option>
	              <option value="10">10</option>
	              <option value="11">11</option>
	              <option value="12">12</option>
	              <option value="13">13</option>
	              <option value="14">14</option>
	              <option value="15">15</option>
	              <option value="16">16</option>
	              <option value="17">17</option>
	              <option value="18">18</option>
	              <option value="19">19</option>
	              <option value="20">20</option>
	              <option value="21">21</option>
	              <option value="22">22</option>
	              <option value="23">23</option>
	              <option value="24">24</option>
	              <option value="25">25</option>
	              <option value="26">26</option>
	              <option value="27">27</option>
	              <option value="28">28</option>
	              <option value="29">29</option>
	              <option value="30">30</option>
	              <option value="31">31</option>
	            </select>

	            <select id="ara_monthdropdown" name="ara_birth_month" class="ara_input" required="">
	              <option value="" selected="">MONTH *</option>
	              <option value="1">1</option>
	              <option value="2">2</option>
	              <option value="3">3</option>
	              <option value="4">4</option>
	              <option value="5">5</option>
	              <option value="6">6</option>
	              <option value="7">7</option>
	              <option value="8">8</option>
	              <option value="9">9</option>
	              <option value="10">10</option>
	              <option value="11">11</option>
	              <option value="12">12</option>
	            </select>

	            <select id="ara_yeardropdown" name="ara_birth_year" class="ara_input" required="">
	              <option value="" selected="">YEAR *</option>
	              <option value="2015">2015</option>
	              <option value="2014">2014</option>
	              <option value="2013">2013</option>
	              <option value="2012">2012</option>
	              <option value="2011">2011</option>
	              <option value="2010">2010</option>
	              <option value="2009">2009</option>
	              <option value="2008">2008</option>
	              <option value="2007">2007</option>
	              <option value="2006">2006</option>
	              <option value="2005">2005</option>
	              <option value="2004">2004</option>
	              <option value="2003">2003</option>
	              <option value="2002">2002</option>
	              <option value="2001">2001</option>
	              <option value="2000">2000</option>
	              <option value="1999">1999</option>
	              <option value="1998">1998</option>
	              <option value="1997">1997</option>
	              <option value="1996">1996</option>
	              <option value="1995">1995</option>
	              <option value="1994">1994</option>
	              <option value="1993">1993</option>
	              <option value="1992">1992</option>
	              <option value="1991">1991</option>
	              <option value="1990">1990</option>
	              <option value="1989">1989</option>
	              <option value="1988">1988</option>
	              <option value="1987">1987</option>
	              <option value="1986">1986</option>
	              <option value="1985">1985</option>
	              <option value="1984">1984</option>
	              <option value="1983">1983</option>
	              <option value="1982">1982</option>
	              <option value="1981">1981</option>
	              <option value="1980">1980</option>
	              <option value="1979">1979</option>
	              <option value="1978">1978</option>
	              <option value="1977">1977</option>
	              <option value="1976">1976</option>
	              <option value="1975">1975</option>
	              <option value="1974">1974</option>
	              <option value="1973">1973</option>
	              <option value="1972">1972</option>
	              <option value="1971">1971</option>
	              <option value="1970">1970</option>
	              <option value="1969">1969</option>
	              <option value="1968">1968</option>
	              <option value="1967">1967</option>
	              <option value="1966">1966</option>
	              <option value="1965">1965</option>
	              <option value="1964">1964</option>
	              <option value="1963">1963</option>
	              <option value="1962">1962</option>
	              <option value="1961">1961</option>
	              <option value="1960">1960</option>
	              <option value="1959">1959</option>
	              <option value="1958">1958</option>
	              <option value="1957">1957</option>
	              <option value="1956">1956</option>
	              <option value="1955">1955</option>
	              <option value="1954">1954</option>
	              <option value="1953">1953</option>
	              <option value="1952">1952</option>
	              <option value="1951">1951</option>
	              <option value="1950">1950</option>
	              <option value="1949">1949</option>
	              <option value="1948">1948</option>
	              <option value="1947">1947</option>
	              <option value="1946">1946</option>
	              <option value="1945">1945</option>
	              <option value="1944">1944</option>
	              <option value="1943">1943</option>
	              <option value="1942">1942</option>
	              <option value="1941">1941</option>
	              <option value="1940">1940</option>
	              <option value="1939">1939</option>
	              <option value="1938">1938</option>
	              <option value="1937">1937</option>
	              <option value="1936">1936</option>
	              <option value="1935">1935</option>
	              <option value="1934">1934</option>
	              <option value="1933">1933</option>
	              <option value="1932">1932</option>
	              <option value="1931">1931</option>
	              <option value="1930">1930</option>
	              <option value="1929">1929</option>
	              <option value="1928">1928</option>
	              <option value="1927">1927</option>
	              <option value="1926">1926</option>
	              <option value="1925">1925</option>
	              <option value="1924">1924</option>
	              <option value="1923">1923</option>
	              <option value="1922">1922</option>
	              <option value="1921">1921</option>
	              <option value="1920">1920</option>
	              <option value="1919">1919</option>
	              <option value="1918">1918</option>
	              <option value="1917">1917</option>
	              <option value="1916">1916</option>
	            </select>

	            <input type="submit" id="age_submit" value="Submit">
	          </form>
	          <p class="ara_legal">
	            Not for sale to persons under the age of 18. <br>
	            Drink responsibly.
	          </p>
	          <p class="ara_web">
	            To view the FAT bastard Website for Europe and Asia <a href="http://international.fatbastard.com/">click here</a>. <br>
	            To view the FAT bastard Website for US and Canada <a href="http://fatbastard.com/?country=us">click here</a>.
	          </p>
	          <br style="clear:both;">
	        </div>
	      </div>
	      <!-- <div class="contact-copy competition-copy" id="popup_container">
	      <p id="popup_heading">ARA</p>
	      <p id="popup_content"><i>A LUXURIOUS TRIP FOR TWO ABOARD</i></p>
	      <p id="popup_rovos_copy">THE ROVOS RAIL</p>
	      <hr id="enter_line">
	      <p id="enter_now"><a href="/pages/rovosrail.php"><i><span class="highlight">ENTER NOW!</span></i></a></p>
	      </div> -->
	    </div>
	  </div>

	</div>

</footer>
<script src="<?= $base_path;?>scripts/jquery-ui.custom.js"></script>
<script src="<?= $base_path;?>scripts/jquery.mobile-menu.js"></script>
<script src="<?= $base_path;?>scripts/navtabs.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.pack.js"></script>
<script src="<?= $base_path;?>scripts/jquery.tinycolorpicker.js"></script>
<script src="<?= $base_path;?>scripts/smooth-scroll.js"></script>
<script src="<?= $base_path;?>scripts/jquery.validate.js"></script>
<script src="<?= $base_path;?>scripts/placeholder.min.js"></script>
<script src="<?= $base_path;?>scripts/tableExport.js"></script>
<script src="<?= $base_path;?>scripts/jquery.base64.js"></script>
<script src="<?= $base_path;?>scripts/html2canvas.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.js"></script>
<script src="<?= $base_path;?>scripts/postcard.js"></script>
<script src="<?= $base_path;?>scripts/theme.js"></script>
<script src="<?= $base_path;?>scripts/postcard-mobile-ui.js"></script>
</div>
<script>
$('input, textarea').placeholder();
</script>

<script type="text/javascript">
  $( document ).ready(function() {

    var keys = {32: 1,37: 1, 38: 1, 39: 1, 40: 1};
        function preventDefault(e) {
      e = e || window.event;
      if (e.preventDefault)
          e.preventDefault();
      e.returnValue = false;  
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    function disableScroll() {
      if (window.addEventListener) // older FF
          window.addEventListener('DOMMouseScroll', preventDefault, false);
      window.onwheel = preventDefault; // modern standard
      window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
      window.ontouchmove  = preventDefault; // mobile
      document.onkeydown  = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener)
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.onmousewheel = document.onmousewheel = null; 
        window.onwheel = null; 
        window.ontouchmove = null;  
        document.onkeydown = null;  
    }

    if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
      var ara_modal = document.getElementById('araModal');
      ara_modal.style.display = "block";
      //disableScroll();
      // $(location).attr('href', ara);
    }

    $('#age_form').on('submit', function(event) {
      event.preventDefault();

      var day = $('#ara_daydropdown').val(),
          month = $('#ara_monthdropdown').val(),
          year = $('#ara_yeardropdown').val(),
          dob = year+"-"+month+"-"+day;

          // dob = new Date(dob);
          dob = new Date(year,month,day);

      var today = new Date();
      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
      
      if(age > 17) {
        ara_modal.style.display = "none";
        //enableScroll();

        document.cookie="is_legal=yes";

        $('.ara_age_not').hide();
      } else {
        $('.ara_age_not').show();
      }

    });


  });
</script>