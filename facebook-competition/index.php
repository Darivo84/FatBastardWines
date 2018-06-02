<?php

	include 'includes/config.php';
	include 'includes/head.php';
	include 'includes/facebook_connect.php';
?>
<style media="screen">
    .main-content{
    padding: 4% 0;
    margin: 0 0;
		}

		.main-content p {
    margin: 0;
    text-align: center;
        max-width: 462px;
    margin: 0 auto;
    width: 90%;
}
</style>
  <script>
    // if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
    //   $(location).attr('href', ara);
    // }

    if ($.cookie('competition-cookie') === '' || $.cookie('competition-cookie') === 'undefined' || $.cookie('competition-cookie') !== 'yes') {
      var fancy = 'home';
    } else {
      var fancy = '';
    }
  </script>
        <div class="inner">
          <div class="main-content">
            <div class="left win-icon-container fat-chance">
              <img src="elements/fat_chance_pop-up_2x.png" alt="" />
            </div>
						<p>Enter our competition and <b style="font-size:22px;">stand to win</b> a luxurious weekend getaway in <b style="font-size:22px;">Clifton</b> worth <b style="font-size:22px;">R50 000</b>. </p>

						<div class="clearfix"></div>

		        <a href="<?= $base_path; ?>pages/competition_signup.php">
						<div class="button-container">
          	<button class="primary" id="signup-competition" type="button" name="button">ENTER NOW</button>
					</div>
        </a>
        <div class="clearfix"></div>
			</div>

      <?php
	include 'includes/footer.php';
?>
