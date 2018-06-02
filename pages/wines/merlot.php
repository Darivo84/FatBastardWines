<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'merlot';
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
<div class="wine-lightbox" style="display:block;" id="merlot">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#merlot_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#merlot_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/merlot_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading merlot">
				<h1>Merlot</h1>
			</div>
		</div>
		<div class="middle">
			<p>Our Merlot is the epitome of the well-rounded FAT bastard.</p>
			<p>It is made from carefully selected grapes with the aim to produce a ripe-flavoured and silky textured wine. All fruit is gently pressed to retain fruit aromas and character.</p>
			<p>The wine is aged in small oak barrels, adding greater weight and complexity. With a deep ruby hue, our Merlot boasts aromas of ripe berries leading to a juicy palate of summer fruits and black cherry with soft, rounded tannins to finish.</p>
			<p>Life is good!</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/merlot/tasting_note/FAT-B-mer-14.pdf"><span class="year merlot">2014</span></a>
			<!-- <div class="archive-break"></div> -->
						<span class="archive-container">
					<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/merlot/archive/FAT-B-mer-13.pdf"><span class="year merlot">2013</span></a>
				<!-- <a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/merlot/tasting_note/750FAT-B-cab-13.pdf"><span class="year merlot">2014</span></a> -->
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

