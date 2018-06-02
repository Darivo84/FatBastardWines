
<?php

// echo $_SESSION['day'];
// echo $_SESSION['month'];
// echo $_SESSION['year'];
// echo $_SESSION['userLocation'];


?>

<?php
	include '../includes/config.php';
	include '../includes/head.php';

?>
<script>
if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes'){$(location).attr('href', ara);}
</script>

<?php
	include '../includes/header_nav.php';
?>

<style type="text/css">
	 p.error {
color: #EAB332;
-webkit-font-smoothing: antialiased;
margin: 0;
font-size: 15px;
  line-height: 21px;}
/*.fancybox-wrap{top: 80px !important;}*/
.fancybox-skin{ background-color: #fff;}
.fancybox-inner{overflow: hidden;}
.fancybox-inner .contact-form textarea{
	border: 1px solid #A6A6A6;
}

</style>
<div class="main-content live-large">
<div>
	<p>When you're enjoying large, delicious mouthfuls of Fat Bastard, you're bound to be keeping great company. There'll simply be no shortage of sharing and good old-fashioned fun.</p>
	<br>
	<p ><i class="highlight">But what about the days in between?</i></p>
	<br>
	<p>When you're <span class="highlight">LIVING LARGE</span>, a day would be incomplete without a welcoming embrace or a thigh-slapping good chuckle at the very least. </p>
</div>
</div>
<div class="clearfix"></div>



<?php
	 include 'live_large_desktop.php';
	 include 'live_large_mobile.php';
?>
<script>
	$('a.live-large').css({
		'font-weight': '800',
		'color': '#EAB332'
	});
</script>
<script>
$('input, textarea').placeholder();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61835092-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10404058; 
var sc_invisible=1; 
var sc_security="c8ee0ffd"; 
var sc_https=1; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="website
statistics" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10404058/0/c8ee0ffd/1/"
alt="website statistics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->