<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'pinotage';
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
<div class="wine-lightbox" style="display:block;" id="pinotage">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#pinotage_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#pinotage_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/pinotage_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading pinotage">
				<h1>Pinotage</h1>
			</div>
		</div>
		<div class="middle">
			<p>Naturally, the FAT bastard Pinotage is full bodied with an intense fruit flavour and the real character you only get from hand-harvesting quality grapes (ever so gently to retain all the aroma).</p>
			<p>FAT bastard Pinotage is also aged in small oak barrels for 22 months to add greater weight and complexity.</p>
			<p>Pinotage, a truly South African grape, originated from a cross between Pinot Noir and Hermitage. This wine shows rich aromas of ripe plum and banana with a lingering impression of chocolate and plum pudding.</p>
			<p>However, all you need to know is that it’s an absolute blast to enjoy.</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotage/tasting_note/FAT-B-pino-14.pdf"><span class="year pinotage">2014</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotage/archive/FAT-B-pino-13.pdf"><span class="year pinotage">2013</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotage/archive/FAT-B-pino-12-mrt14.pdf"><span class="year pinotage">2012</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinotage/archive/ROB-tn-fb-pino-11-f-web.pdf"><span class="year pinotage">2011</span></a>
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

