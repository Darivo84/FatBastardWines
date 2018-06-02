<?php

	include 'includes/config.php';
	include 'includes/head.php';
?>


<script src="<?= $base_path;?>scripts/jquery.validate.js"></script>
<script src="<?= $base_path;?>scripts/text-editor.min.js"></script>
<script src="<?= $base_path;?>scripts/jquery-ui.custom.js"></script>
<script src="<?= $base_path;?>scripts/jquery.mobile-menu.js"></script>
<script src="<?= $base_path;?>scripts/navtabs.js"></script>
<script src="<?= $base_path;?>scripts/jquery.fancybox.pack.js"></script>
<script src="<?= $base_path;?>scripts/jquery.tinycolorpicker.js"></script>
<script src="<?= $base_path;?>scripts/smooth-scroll.js"></script>
<script src="<?= $base_path;?>scripts/theme.js"></script>
<div class="ara-overlay"></div>
<div class="ara-container">
	<nav>
		<div class="hippo"></div>
	</nav>
	<main>
	<!-- <form name="user_dob" id="user_dob" method="post"> -->

		<div class="main-content ara-copy">
			<p>To enjoy FAT bastard, you need to be able to <span class="highlight">LIVE LIKE ONE</span>. <br> Living <span class="highlight" style="font-size: 28px;">LARGE</span> requires a salubrious take on the good life. </p>
			<div class="spacer"></div>
			<p><i>It comes with <span class="highlight">experience</span> so if you're not there yet, keep at it.</i></p>
		</div>
		<p class="opening-text">This is the South African FAT bastard Website, <br>
		<span class="smaller">	To view the FAT bastard Website for Europe and Asia <a  class="highlight" href="http://international.fatbastard.com/">click here.</a>
			<br>
			To view the FAT bastard Website for the US and Canada <a  class="highlight" href="http://fatbastard.com/?country=us">click here.</a>
			</span>
		</p>
		<div class="user-details">
			<div class="user-location-ara">
				<p>From Where Are You Joining Us?</p>
				<div class="user-location-wrapper">
					<select name="user_location" id="user_location" required>
						<option class="center" value="" selected>Select *</option>
						<option class="center" value="Eastern Cape">Eastern Cape</option>
						<option class="center" value="Free State">Free State</option>
						<option class="center" value="Gauteng">Gauteng</option>
						<option class="center" value="Kwazulu-Natal">Kwazulu-Natal</option>
						<option class="center" value="Limpopo">Limpopo</option>
						<option class="center" value="Mpumalanga">Mpumalanga</option>
						<option class="center" value="North West">North West</option>
						<option class="center" value="Northern Cape">Northern Cape</option>
						<option class="center" value="Western Cape">Western Cape</option>
						<option class="center" value="International">International</option>
					</select>
				</div>
			</div>
			<div class="bottom">
				<div class="user-birth-ara">
					<p>When were you born?</p>
					<?php include 'includes/page_pieces/dob.php'; ?>
					<button class="ara">GO</button>
				</div>
				<div class="clearfix"></div>
				<p class="error" style="display:none;">Oops, it seems that’s not enough for a FAT bastard. <br> Please check your details and try again.</p>
				<p class="validation"></p>
			</div>
			</div>
			<!-- </form> -->
			</main>
			<footer><p>NOT FOR SALE TO PERSONS UNDER THE AGE OF 18. <br class="hidden-desktop"> DRINK RESPONSIBLY</p></footer>


</div>

</body>
</html>
