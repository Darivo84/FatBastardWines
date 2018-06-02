<?php
	include '../../includes/config.php';
	include '../../includes/head.php';
session_start();
$_SESSION['yes'] = 'shiraz';
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
<div class="wine-lightbox" style="display:block;" id="shiraz">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#shiraz_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#shiraz_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/shiraz_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading shiraz">
				<h1>Shiraz</h1>
			</div>
		</div>
		<div class="middle">
			<p>Our Shiraz is yet another delicious wine in the pod of FAT bastards that we simply know you’ll love. It’s made from carefully selected grapes with the aim to produce a wine with pure fruit character. All fruit is gently pressed to retain fruit aromas.</p>
			<p>The wine is aged in small oak barrels, which adds greater weight and complexity to the finished product. This full-bodied wine shows freshly crushed black pepper aromas with hints of cinnamon and cloves on the nose with lots of brambly red berry fruit and well-integrated vanilla tones.</p>
			<p>Enjoy the FAT bastard Shiraz with great, joyous abandon.</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE <br class="hidden-desktop"> <a  target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/shiraz/tasting_note/FAT-B-shiraz-14.pdf"><span class="year shiraz">2014</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a  target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/shiraz/archive/FAT-B-shiraz-13.pdf"><span class="year shiraz">2013</span></a>
				<a  target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/shiraz/archive/FAT-B-shiraz-12new.pdf"><span class="year shiraz">2012</span></a>
				<a  target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/shiraz/archive/ROB-tn-fb-shiraz-11.pdf"><span class="year shiraz">2011</span></a>
				<div class="archive-set">
				<a  target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/shiraz/archive/ROB-tn-fb-shiraz-10.pdf"><span class="year shiraz">2010</span></a>
				</div>
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

