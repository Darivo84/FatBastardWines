<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'sauvignon-blanc';
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
<div class="wine-lightbox" style="display:block;" id="savBlanc">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#savBlanc_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#savBlanc_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/sauvignon_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading sav-blanc">
				<h1>Sauvignon Blanc</h1>
			</div>
		</div>
		<div class="middle">
			<p>This is a FAT bastard like no other, a Sauvignon Blanc of real character with intense fruit flavours, utilising our best quality grapes.</p>
			<p>It is blended from a selection of the best wines of the harvest with the fruit all being harvested gently and quietly in the early hours and pressed while the grapes are still cool to help retain aroma and flavour. (It’s tough to contain ourselves from erupting with glee during the process.)</p>
			<p>This beautifully balanced white wine offers good texture with layers of tropical fruit. A fresh acidity follows through to a long, satisfying finish.</p>
			<p>From the start, our aim was to produce a Sauvignon Blanc of real character. But of course, it’s a FAT bastard!</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/savblanc/tasting_note/FAT-B-sauv-blanc-15.pdf"><span class="year sauvignon">2015</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
			<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/savblanc/archive/FAT-B-sauv-blanc-14.pdf"><span class="year sauvignon">2014</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/savblanc/archive/FAT-B-sauvignon-blanc-13-mrt14.pdf"><span class="year sauvignon">2013</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/savblanc/archive/ROB-fb-sauv-12.pdf"><span class="year sauvignon">2012</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/savblanc/archive/ROB-tn-fb-sauv-11.pdf"><span class="year sauvignon">2011</span></a></h3>
			</span>
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

