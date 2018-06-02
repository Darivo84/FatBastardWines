<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'cabernet-sauvignon';
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
<div class="wine-lightbox" style="display:block;" id="cabSav">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#cabSav_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#cabSav_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/cabsav_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading cab-sav">
				<h1>Cabernet Sauvignon</h1>
			</div>
		</div>
		<div class="middle">
			<p>"If I may be so bold," is a phrase that doesn’t seem to fit in the FAT bastard lexicon. To understand what we mean, take a healthy gulp of the FAT bastard Cabernet Sauvignon.</p>
			<p>It is made from carefully selected grapes with the aim of producing a wine with pure fruit character. All fruit is hand harvested at optimum ripeness and gently pressed to retain aroma and flavour. The wine is aged in small oak barrels, which adds greater weight and complexity.</p>
			<p>Its unapologetically intense aromas of blackcurrant and brambly wild fruit lead promisingly to rich flavours of ripe cassis and chocolate with a hint of earthiness.</p>
			<p>Balanced tannins and acidity ensure a well-defined structure and elegant finish. Fat, unadulterated joy in a bottle!</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/cabsav/tasting_note/cabsav-14.pdf"><span class="year cab-sav">2014</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/cabsav/archive/750FAT-B-cab-13.pdf"><span class="year cab-sav">2013</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/cabsav/archive/FAT-B-cab-12new.pdf"><span class="year cab-sav">2012</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/cabsav/archive/ROB-tn-fb-cab-10-f-web1.pdf"><span class="year cab-sav">2010</span></a>
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

