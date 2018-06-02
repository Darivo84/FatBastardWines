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


