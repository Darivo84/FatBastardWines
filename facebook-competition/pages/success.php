<?php
	include '../includes/config.php';
	include '../includes/head.php';
	include '../includes/facebook_connect.php';
?>
<style media="screen">
.main-content h1{
  color:#fff;
  text-align: center;
}

.half {
    width: 48%;
    float: left;
    padding: 1rem 0;
	}
#facebook{
	margin-right: 4%;
}

.main-content {
	padding: 4% 0;
    margin: 0;
}

.button {
    /*width: 50%;*/
    float: left;
}

.button-container.socail{
	width: 203px;
}
.fb-soc{
	    margin-right: 8px;
}

</style>

        <div class="inner">
          <div class="main-content">
            <div class="left win-icon-container fat-chance">
              <img src="../elements/fat_chance_pop-up_2x.png" alt="" />
            </div>
						<div class="clearfix"></div>

						<h1 style="font-size: 22px;">THANK YOU FOR ENTERING THE LIVE LARGE EXPERIENCE.</h1>
						<br>

				<h1 style="font-size: 22px;">WHY NOT JOIN FAT BASTARD ON FACEBOOK OR <br> FOLLOW US ON TWITTER.</h1>
				<div class="button-container  socail">
					<div class="button fb-soc">	<div class="fb-like" data-href="https://www.fatbastardwine.co.za" data-width="149px" data-layout="button"  data-action="like" data-show-faces="false" data-share="false"></div></div>
				<div class="button"><a href="https://twitter.com/FATbastardSA" class="twitter-follow-button button" data-show-count="false" data-size="small"></a></button>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>

				<div class="clearfix"></div>
				<br>
				<br>


				<h1 style="font-size: 22px;">DISCOVER MORE ON OUR WEBSITE.</h1>
			<a target="_blank" href="http://fatbastardwine.co.za">
				<div class="button-container">
					<button class="primary" type="button" name="button">GO</button>
				</div>
			</a>

        <div class="clearfix"></div>
			</div>

      <?php
	include '../includes/footer.php';
?>
