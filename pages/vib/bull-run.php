<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['vib'] = 'bull-run';
?>
<script>
   //if($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes'){$(location).attr('href', ara);}
</script>

<?php
	include '../../includes/header_nav.php';
?>
<style type="text/css">
	.wine-container
	{
		float:none;
		max-width:960px;
		margin:59px auto;
		width:auto; 
	}
	.stamp
	{
		float:left;
		margin:33px 0 0 !important; 
	}
	.wine-container.vib .background-strip
	{
		width:100%;
	}
	.wine-container.vib
	{
		width:69%;
		float:none;
		margin:0 auto; 
	}
	.gold
	{
		float: right;
	    font-size: 22px;
	    padding: 13px 0;
	    text-transform: uppercase;
	    width:205px;
	    height:50px !important; 
	}
	.gold:hover
	{
		border-color:#EAB332 !important;
		background-color:#EAB332 !important;
		color:#fff !important;  
	}
	.has-btn
	{
	    display: block;
	    width:100%;
	}
	@media(min-width:1001px){
		.wine-container.vib .background-strip
		{
			width:95.8%;
		}
	}
	@media only screen and (min-device-width: 667px){
		.wine-container .stamp
		{
			margin: 33px 0 0 47%;
		}
	}
	@media(min-width:1037px){
		.has-btn
		{
			width:88%;
		}
	}
</style>
<div class="main-content bastards-copy">
<div>
	<p>The VIB, or <span class="highlight large">'Very Important bastards'</span>, <br>is an exclusive club for the crème de la crème of FAT bastard’s partners, comprising our top-selling restaurants in the country—the ones who really know how to <span class="highlight sm-c">LIVE LARGE</span>. <br><br> If you’re ever in the area, be sure to stop by at one of these exceptional watering holes for <i class="highlight">great wine</i>, delicious food and fantastic service.</p>	<br>
	<br>
</div>
<div class="clearfix"></div>
</div>
<div class="wine-headline hidden-desktop">
	<h1>The FAT bastards</h1>
</div>
<div class="wines vib-container">
<div class="bottom"><!-- bottom -->


<div class="wine-lightbox vib" style="" id="shiraz">
	<div class="left">

			<div class="bottle-container">
				<img width="267" height="183" class="large-img" src="../../pieces/vib/the-bull-run/1.jpg" alt="">
				<ul class="social-icons thumbs">
					<li><img width="97" height="97" src="../../pieces/vib/the-bull-run/1-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/the-bull-run/2-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/the-bull-run/3-thumb.jpg" alt="" /></li>
				</ul>
			</div>

	</div>
	<div class="right">
		<div class="top">
			<div class="heading">
				<h1>Bull Run</h1>
			</div>
		</div>
		<div class="middle">
		<p>The Bull Run serves top quality, maturely aged meat, specialising in prime cuts of choice meat. All meat and biltong, is hand-cut by our In-house butcher daily. For sunny days our guests can make use of the terrace to enjoy an exotic cocktail or a bottle of Champagne and indulge with plate of fresh Luderitz Oysters. Menu can be tailor made to suit your requirements. </p>
			<p><b>Address</b><br> 20 Maude St, Sandton, 2196</p>
			<p><b>Phone</b><br> +27 (0)11 884 1400</p>
		</div>
		<div class="bottom">
			<!-- <a href="www.thebullrun.co.za">thebullrun.co.za</a> <br> -->
			<a class="highlight" href="http://www.thebullrun.co.za" target="_blank">www.thebullrun.co.za</a>
			<ul class="social-icons">
				<li><a href="http://www.facebook.com/pages/The-Bull-Run-Restaurant-Sandton/216759578383030" target="_blank"><img width="40" height="40" src="../../elements/vib-social/fb.png" alt="" /></a></li>
				<li><a href="http://www.twitter.com/the_bull_run" target="_blank"><img width="40" height="40" src="../../elements/vib-social/twit.png" alt="" /></a></li>
			</ul>
		</div>
	</div>
</div>



</div><!-- bottom -->
	<div class="clearfix"></div>
	<p class="has-btn"><a href="../very_important_bastards.php"><button class="gold">Back to vib</button></a></p>
</div>
</div>
<div class="wine-container stamp-container">
<img class="stamp" src="../../elements/stamp_3.png" alt="">
</div>
<div class="clearfix"></div>
		</div>
	</div>
<?php
include '../../includes/footer.php';
?>
<script>
	$('a.vib').css({
		'font-weight': '800',
		'color': '#EAB332'
	});
</script>
<?php 
 ?>

