<?php
	session_start();
	include '../../includes/config.php';
	include '../../includes/head.php';
	$_SESSION['yes'] = 'fat-bastard-chardonnay';
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
<div class="wine-lightbox" style="display:block;" id="fbChardonay">
	<div class="left">
		<a class="fancy-close wine-fancy" rel="packshot1" href="#chardonnay_packshot">
			<div class="download">
			</div>
		</a>
		<a class="fancy-close wine-fancy" rel="packshot" href="#chardonnay_packshot">
			<div class="bottle-container">
				<img src="../../elements/wines/large/chardonnay_lightbox.jpg" alt="">
			</div>
		</a>
	</div>
	<div class="right">
		<div class="top">
			<div class="heading fb-chardonnay">
				<h1>Chardonnay</h1>
			</div>
		</div>
		<div class="middle">
			<p>This is the grand-daddy (or grand-mammy, if you prefer) of all FAT bastards.</p>
			<p>With all fruit harvested in the early hours and the juice pressed while the grapes are still cool to help retain aroma and flavour, the care that goes into the FAT bastard Chardonnay is nothing short of fastidious.</p>
			<p>The wine is tank fermented with an element of the jolly good stuff scientists call quercus fragmentus, which adds greater weight and complexity. The wine shows classic ripe, rich butter and tropical fruit on the nose and soft, well-integrated vanilla on the palate.</p>
			<p>Unsurprisingly, the result is a voluptuously delectable wine that’s not only fabulous to drink, it continues to win prizes too. A veritable coup of the fattest type!</p>
		</div>
		<div class="bottom">
			<h3>TASTING NOTE
			<br class="hidden-desktop">
			<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/chardonnay/tasting_note/FAT-B-chard-15.pdf"><span class="year fb-chardonnay">2015</span></a>
			<div class="archive-break"></div>
			<span class="archive-container">
				<span class="archive">ARCHIVE</span>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/chardonnay/archive/FAT-B-chard-14.pdf"><span class="year fb-chardonnay">2014</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/chardonnay/archive/FAT-B-chard-13-mrt14.pdf"><span class="year fb-chardonnay">2013</span></a>
				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/chardonnay/archive/ROB-tn-fb-chard-12-2.pdf"><span class="year fb-chardonnay">2012</span></a>
				<div class="archive-set">

				<a target="_blank" href="<?php echo $base_path; ?>pdf/tasting_notes/chardonnay/archive/ROB-tn-fb-chard-11.pdf"><span class="year fb-chardonnay">2011</span></a>
					
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

