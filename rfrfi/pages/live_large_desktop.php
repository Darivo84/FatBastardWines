<div class="desktop-live-large">
	<div class="live-large-container">
		<div>
			<div class="" role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="live-large-nav create-nav active">
						<a href="#create" aria-controls="create" role="tab" id="tb_create"> <span class="smaller">01.</span> CREATE</a>
					</li>
					<li role="presentation" class="live-large-nav details-nav">
						<a href="#details" aria-controls="details" role="tab" id="tb_details"><span class="smaller">02.</span> DETAILS</a>
					</li>
					<li role="presentation" class="live-large-nav occasion-nav">
						<a href="#occasion" aria-controls="occasion" role="tab" id="tb_occasion"><span class="smaller">03.</span> OCCASION</a>
					</li>
					<li role="presentation" class="live-large-nav design-nav ">
						<a href="#design" aria-controls="design" role="tab" id="tb_design"><span class="smaller">04.</span> DESIGN</a>
					</li>
					<li role="presentation" class="live-large-nav share-nav ">
						<a href="#share" aria-controls="share" role="tab" id="tb_share"><span class="smaller">05.</span> SHARE</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- create -->
					<div role="tabpanel" class="live-large-content tab-pane create active" id="create">
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
							<div class="hide-ie8">
								<div class="button-container">
									<a id="create-next" aria-controls="create" role="tab" data-toggle="tab">
										<button class="gold">Next</button>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- details -->
					<div role="tabpanel" class="live-large-content details tab-pane " id="details">
						<!--[if lt IE 9]>
						<p style="text-align:center;">Unfortunately your browser does not support this feature. <br/> Please upgrade or <a class="highlight" target="_blank" href="https://www.google.com/chrome/browser/desktop/index.html">switch</a> to a modern browser.</p>
						<![endif]-->
						<div class="hide-ie8">
							<form id="livelargeform" method="post">
								<div class="top">
									<h1>To Start, Please Complete The Form.</h1>
									<div style="width:50%; margin: 0 auto;">
										<h2>Who Might You Be?</h2>
										<div class="left" style="width:49%">
											<input class="text-input" placeholder="NAME *" type="text" name="user_name" id="user_name" required />
										</div>
										<div class="right" style="width:49%">
											<input class="text-input" placeholder="SURNAME *" type="text" name="user_surname" id="user_surname" required />
										</div>
										<input class="text-input" placeholder="EMAIL *" type="email" name="user_email" id="user_email" required />
										<input class="text-input" placeholder="CONTACT NUMBER *" type="text" name="user_tel" id="user_tel" required />
										<input type="hidden" name="day" id="day" value="<?php echo $_SESSION['day']; ?>"/>
										<input type="hidden" name="month" id="month" value="<?php echo $_SESSION['month']; ?>" />
										<input type="hidden" name="year" id="year" value="<?php echo $_SESSION['year']; ?>" />
										<input type="hidden" name="user_location" id="user_location" value="<?php echo $_SESSION['userLocation']; ?>" />
										<div class="clearfix"></div>
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
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="bottom">
								<div class="hide-ie8">
									<div class="button-container left">
										<a id="details-back" aria-controls="details">
											<button class="gold">Back</button>
										</a>
									</div>
									<div class="button-container">
										<button value="Submit"  type="submit" name="submit" id="details-next" class="submit gold">Send</button>
										<!-- </a> -->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- occasion -->
				<div role="tabpanel" class="live-large-content tab-pane" id="occasion">
					<!--[if lt IE 9]>
					<p style="text-align:center; font-size:21px; line-height:30px;">Unfortunately your browser does not support this feature. <br/> Please upgrade or <a class="highlight" target="_blank" href="https://www.google.com/chrome/browser/desktop/index.html">switch</a> to a modern browser.</p>
					<![endif]-->
					<div class="hide-ie8">
						<div class="top">
							<h1 class="occassion-heading">Choose From One Of These Postcard Designs.</h1>
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
							<p style="margin-top: 0;">If you are happy with your postcard choice, please proceed.</p>
							<div class="clearfix"></div>
							<div class="button-container left">
								<a id="occasion-back" aria-controls="occasion">
									<button class="gold">Back</button>
								</a>
							</div>
							<div class="button-container">
								<a>
									<button id="occasion-next" class="gold">Next</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- design -->
				<div role="tabpanel" class="live-large-content design tab-pane " id="design">
					<!--[if lt IE 9]>
					<p style="text-align:center; font-size:21px; line-height:30px;">Unfortunately your browser does not support this feature. <br/> Please upgrade or <a class="highlight" target="_blank" href="https://www.google.com/chrome/browser/desktop/index.html">switch</a> to a modern browser.</p>
					<![endif]-->
					<div class="hide-ie8">
						<div class="top">
							<h1 >Design Your Postcard.</h1>
							<div class="left-right">
								<div id="postcard" class="left postcard">
								</div>
								<div class="right">
									<p>Heading</p>
									<input class="text-input user-heading-input" placeholder="Type Heading Here" type="text" name="user_heading" id="user_heading" maxlength="30" required />
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
							<p style="margin-top:0;">If you are happy with your postcard design, please proceed.</p>
							<div class="button-container left">
								<a id="design-back" aria-controls="design">
									<button class="gold">Back</button>
								</a>
							</div>
							<!-- form with hidden field to pass to save.php -->
							<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
								<input type="hidden" name="img_val" id="img_val" value="" />
								<div class="button-container">
									<a aria-controls="design" role="tab" data-toggle="tab">
										<button id="design-next" class="gold design-next">Next</button>
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- share -->
				<div role="tabpanel" class="live-large-content tab-pane share" id="share">
					<!--[if lt IE 9]>
					<p style="text-align:center; font-size:21px; line-height:30px;">Unfortunately your browser does not support this feature. <br/> Please upgrade or <a class="highlight" target="_blank" href="https://www.google.com/chrome/browser/desktop/index.html">switch</a> to a modern browser.</p>
					<![endif]-->
					<div class="hide-ie8">
						
						<div class="top">
							<h1>Share Your Postcard.</h1>
							<div class="left-right user_share">
							</div>
						</div>
						<div class="bottom">
							<p style="margin-top:0;">If you are happy with your personalised postcard, please share.</p>
							<div class="button-container left">
								<a id="share-back" aria-controls="share">
									<button class="gold">Back</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end #page -->
<footer class=" desktop-live-large-footer">
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
</div>
</div>
<script src="<?= $base_path;?>scripts/jquery-ui.custom.js"></script>
<script src="<?= $base_path;?>scripts/jquery.mobile-menu.js"></script>
<script src="<?= $base_path;?>scripts/navtabs.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.pack.js"></script>
<script src="<?= $base_path;?>scripts/jquery.tinycolorpicker.js"></script>
<script src="<?= $base_path;?>scripts/smooth-scroll.js"></script>
<script src="<?= $base_path;?>scripts/jquery.validate.js"></script>
<script src="<?= $base_path;?>scripts/placeholder.min.js"></script>
<script src="<?= $base_path;?>scripts/gevann.js"></script>
<script src="<?= $base_path;?>scripts/tableExport.js"></script>
<script src="<?= $base_path;?>scripts/jquery.base64.js"></script>
<script src="<?= $base_path;?>scripts/html2canvas.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.js"></script>
<script src="<?= $base_path;?>scripts/postcard.js"></script>
<script src="<?= $base_path;?>scripts/theme.js"></script>
<script src="<?= $base_path;?>scripts/postcard-desktop-ui.js"></script>
</script>
<script>
$('input, textarea').placeholder();
</script>
