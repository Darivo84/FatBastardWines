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
						<p>Fat Bastard is about living life to your heart's content. Here's an easy way you can do just that and share with family and friends every day.
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
							<p class="consent user-conditions">Do you consent to Fat Bastard keeping in touch?</p>
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
	<li><a class="bastards" alt="The Fat Bastards" href="<?= $base_path; ?>pages/the_fat_bastards.php">THE FAT BASTARDS</a> | </li>
	<li><a class="get-in-touch" alt="Get In Touch" href="<?= $base_path; ?>pages/contact.php">GET IN TOUCH</a> | </li>
	<li><a class="tandc-mav" alt="Terms and Conditions" href="http://www.fatbastardwine.co.za/tandc.html">TERMS &AMP; CONDITIONS</a></li>
</ul>
</div>
<div class="copyright">
<div class="copyright-inner">
	<p><i class="fa fa-copyright"></i> 2015 Fat Bastard. South Africa. All rights reserved
		<span class="hide-mobile">
			<span class="divider">|</span>
					Website by <a target="_blank" href="http://designguru.co.za">Design Guru </a>&amp; <a target="_blank" href="http://www.derrickcapetown.com/">Derrick</a></span>
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