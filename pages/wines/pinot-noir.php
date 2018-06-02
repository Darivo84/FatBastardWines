<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'pinot-noir';
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
<div class="wine-lightbox" style="display:block;" id="piotNoir">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#piotNoir_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#piotNoir_packshot">
			
			<div class="bottle-container">
				<img src="../../elements/wines/large/pinot_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading pinot-noir">
				<h1>Pinot Noir</h1>
			</div>
		</div>
		<div class="middle">
			<p>As someone who lives life in large, delicious mouthfuls, you’re sure to appreciate that the FAT bastard Pinot Noir is a velvety affair.</p>
			<p>It is made from carefully selected grapes from the ultra-ripe harvest to produce a wine with an intense fruit flavour.</p>
			<p>The result is delicious; a joyous ruby colour with notes of strawberry and gentle spice, a hint of earthiness with a well-defined structure, and an elegant finish.</p>
			<p>The FAT bastard Pinot Noir simply lives life to the full.</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinot/tasting_note/FAT-B-pinot-noir-13.pdf"><span class="year pinot-noir">2013</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/pinot/archive/FAT-B-pinot-noir-12-5nov1.pdf"><span class="year pinot-noir">2012</span></a>
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

