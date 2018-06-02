<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['vib'] = 'thrive-cafe';
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


<div class="wine-lightbox vib" style="" id="thrive-cafe">
	<div class="left">

			<div class="bottle-container">
				<img width="267" height="183" class="large-img" src="../../pieces/vib/thrive-cafe/1.jpg" alt="">
				<ul class="social-icons thumbs">
					<li><img width="97" height="97" src="../../pieces/vib/thrive-cafe/1-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/thrive-cafe/2-thumb.jpg" alt="" /></li>
					<li><img width="97" height="97" src="../../pieces/vib/thrive-cafe/3-thumb.jpg" alt="" /></li>
				</ul>
			</div>

	</div>
	<div class="right">
		<div class="top">
			<div class="heading">
				<h1>Thrive Cafe</h1>
			</div>
		</div>
		<div class="middle">
		<p>Thrive provides an opportunity for local and overseas visitors as well as Sowetan locals to relax and indulge in very stylish surroundings and rely on and enjoy our unique modern food experience which includes our deep coffee flair and expertise that we have brought to Soweto. Food dishes are made from the best and freshest ingredients and beautifully prepared. Our food offering is a modern bistro style with a steakhouse overlay.</p>
			<p><b>Address</b><br> 5038, Vilakazi St, Soweto, Johannesburg, 1804</p>
			<p><b>Phone</b><br> +27 (0)11 536 1838</p>
		</div>
		<div class="bottom">
			<!-- <a href=" http://www.thrivecafe.co.za/">thrivecafe.co.za</a> <br> -->
			<a class="highlight" href=" http://www.thrivecafe.co.za" target="_blank">www.thrivecafe.co.za</a>
			<ul class="social-icons">
				<li><a href="https://www.facebook.com/Thrive.Cafe" target="_blank"><img width="40" height="40" src="../../elements/vib-social/fb.png" alt="" /></a></li>
				<li><a href="https://twitter.com/Thrive_Cafe" target="_blank"><img width="40" height="40" src="../../elements/vib-social/twit.png" alt="" /></a></li>
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

