<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'pinot-noir-rose';
?>
<script>
   //if($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes'){$(location).attr('href', ara);}
</script>

<?php
	include '../../includes/header_nav.php';
?>
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
<div class="wine-lightbox" style="display:block;" id="piotNoirRose">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#piotNoirRose_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#piotNoirRose_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/pinotrose_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading pinot-noir-rose">
				<h1>Pinot Noir Ros&eacute;</h1>
			</div>
		</div>
		<div class="middle">
			<p>The FAT bastard Pinot Noir Ros&eacute; is delicate, in that full-bodied way.</p>
			<p>The Pinot Noir grapes harvested from the limestone rich soils in the beautiful Robertson valley are gently cold-pressed to extract some colour from the skins of the grapes. This ensures the salmon pink tint that makes rosé wines unique.</p>
			<p>Our Pinot Noir Rosé has a sweet strawberry aroma with underlying floral notes. It is smooth but with a characteristic FAT bastard pep. To be enjoyed chilled on any sunny day.</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotrose/tasting_note/FAT-B-pn-rose-2015.pdf"><span class="year pinot-rose">2015</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotrose/archive/FAT-B-pn-rose-2014.pdf"><span class="year pinot-rose">2014</span></a>
			</span>
			
			</h3>
		</div>
	</div>
</div>

<div class="to-wine">
<a href="../the_fat_bastards.php"><button class="gold">Back to wines</button></a>
</div>

<div class="wine-container stamp-container">
<img class="stamp" src="../../elements/stamp_3.png" alt="">
</div>

</div>

<div class="clearfix"></div>
		</div>
	</div>
<?php
include '../../includes/footer.php';
?>
<script>
	$('a.bastards').css({
		'font-weight': '800',
		'color': '#EAB332'
	});
</script>

<?php 
 ?>

