<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['vib'] = 'ghazal';
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


<div class="wine-lightbox vib" style="" id="pinotage">
	<div class="left">

			<div class="bottle-container">
				<img width="267" height="183" class="large-img" src="../../pieces/vib/ghazal/1.jpg" alt="">
				<ul class="social-icons thumbs">
					<li><img width="97" height="97" src="../../pieces/vib/ghazal/1-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/ghazal/2-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/ghazal/3-thumb.jpg" alt="" /></li>
				</ul>
			</div>

	</div>
	<div class="right">
		<div class="top">
			<div class="heading">
				<h1>Ghazal</h1>
			</div>
		</div>
		<div class="middle">
		<p>From the mysterious Indian Sub-Continent comes a new authentic restaurant, Ghazal, to tease your culinary buds and acquaint you to an entirely new dimension of aromatic and diverse range of traditional food wonders. Here our abundant enthusiasm and world class Chefs bring you the timeless art of mixing herbs and spices to give quality food.</p>
			<h5 class="no-margin">SUNNINGHILL</h5>
			<p><b>Address</b><br>Shop 13, The Square, cnr Leeuwkop and Naivasha, Sunninghill, Johannesburg </p>
			<p><b>Phone</b><br> +27 (0)11 706 9826 </p>
		</div>
		<!-- <div class="bottom">
			 <a href="http://www.ghazal.co.za">ghazal.co.za</a> <br> 
			<a class="highlight" href="http://www.ghazal.co.za" target="_blank">www.ghazal.co.za</a>
			<ul class="social-icons">
				<li><a href="#"><img width="40" height="40" src="../elements/vib-social/fb.png" alt="" /></a></li>
				<li><a href="#"><img width="40" height="40" src="../elements/vib-social/twit.png" alt="" /></a></li>
				<li><a href="#"><img width="40" height="40" src="../elements/vib-social/inst.png" alt="" /></a></li>
			</ul>
		</div>  -->
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

