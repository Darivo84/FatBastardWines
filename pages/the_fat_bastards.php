<?php
if($_REQUEST['source'] && $_REQUEST['source']=='mail')
{
      //$_SESSION['country']=$_REQUEST['country'];
  setcookie('is_legal', 'yes', time() + (7200), "/");
}

	session_start();
	include '../includes/config.php';
	include '../includes/head.php';

?>
<script>
   //if($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes'){$(location).attr('href', ara);}
</script>

<?php
	include '../includes/header_nav.php';
?>
<style type="text/css">
	.top-single
	{
		margin-top:80px;
		margin-bottom:43px; 
	}
</style>
<div class="main-content bastards-copy">
<div>
	<h1 class="highlight mobile-hide">The FAT bastards</h1>
	<p>The only thing better than a <span class="highlight sm-c">Glass Of Wine</span> with wonderful colour <br class="mobile-hide">and rich, round palate is another glass of the <i class="highlight">same wine.</i></p>
	<br>
</div>
<div class="clearfix"></div>
</div>
<div class="wine-headline hidden-desktop">
	<h1>The FAT bastards</h1>
</div>
<div class="wines">
	<div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/chardonnay.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top-single" style="margin-bottom:77px;">
		<h1 class="fb-chardonnay double" >Chardonnay</h1>
		<p>This is the granddaddy (or grand-mammy, if you prefer) of all FAT bastards.</p>
		</div>
		<div class="bottom">
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/fat-bastard-chardonnay.php" rel="wine" class="wine-fancy"><button class="chardonnay show-chardonnay">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border fb-chardonnay"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/sauvignon.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top-double">
		<h1 class="sauvignon double" >Sauvignon <br>Blanc</h1>
		<p>This is a FAT bastard like no other, Sauvignon Blanc of real character.</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/sauvignon-blanc.php" rel="wine" class="wine-fancy"><button class="sauvignon show-blanc">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border sauvignon"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/pinotrose.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top-double">
		<h1 class="pinot-rose double" >Pinot <br>Noir Ros&eacute;</h1>
		<p>The FAT bastard Pinot Noir Ros&eacute; is delicate, in that full bodied way.</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/pinot-noir-rose.php" rel="wine" class="wine-fancy"><button class="pinot-rose show-pinot-rose">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border pinot-rose"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/pinot.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top">
		<h1 class="pinot-noir" >Pinot Noir</h1>
		<p>You're sure to appreciate the FAT bastard Pinot Noir velvety affair.</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/pinot-noir.php" rel="wine" class="wine-fancy"><button class="pinot-noir show-pinot-noir">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border pinot-noir"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/pinotage.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top">
		<h1 class="pinotage" >Pinotage</h1>
		<p>Naturally, the FAT bastard Pinotage is full bodied with an intense fruit flavour...</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/pinotage.php" rel="wine" class="wine-fancy"><button class="pinotage show-pinotage">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border pinotage"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/cabsav.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top-double">
		<h1 class="cab-sav double" >Cabernet <br>Sauvignon</h1>
		<p>"If may be so bold," is a phrase that doesn't seem to fit in the FAT bastard lexicon.</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/cabernet-sauvignon.php" rel="wine" class="wine-fancy"><button class="cab-sav show-sav">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border cab-sav"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/merlot.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top">
		<h1 class="merlot" >Merlot</h1>
		<p>The epitome of the well-rounded FAT bastard is our Merlot.</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/merlot.php" rel="wine" class="wine-fancy"><button class="merlot show-merlot">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border merlot"></div>
</div>
<div class="wine-divider"></div>
<div class="wine-container">
	<div class="wine-left">
		<img src="../elements/wines/small/shiraz.png" alt="">
	</div>
	<div class="wine-right">
		<div class="top">
		<h1 class="shiraz" >Shiraz</h1>
		<p>Yet another delicious wine that we simply know you'll love...</p>
		</div>
		<div class="bottom">
		<div class="wine-button-container"><a href="wines/shiraz.php" rel="wine" class="wine-fancy"><button class="shiraz show-sherloz">Read More</button></a></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<div class="wine-hover-border shiraz"></div>
</div>
<div class="wine-divider"></div>

<div class="wine-container stamp-container">
<img class="stamp" src="../elements/stamp_3.png" alt="">
</div>

</div>

<div class="clearfix"></div>
		</div>
	</div>
<?php
 include '../includes/page_pieces/wine_lightboxes.php';
 include '../includes/page_pieces/wine_packshots.php';
include '../includes/footer.php';
?>
<script>
	$('a.bastards').css({
		'font-weight': '800',
		'color': '#EAB332'
	});

	var is_safari = navigator.userAgent.indexOf("Safari") > -1;
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1)
 {

 }
</script>

<?php 
 ?>

