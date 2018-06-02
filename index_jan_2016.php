<?php
session_start();
	include 'includes/config.php';
	include 'includes/head.php';
if(isset($_SESSION['yes']))
{
  echo $_SESSION['yes'];
  $sess = $_SESSION['yes'];
  header("location:pages/wines/".$sess);
}
else
{

}
?>

  <script>

    if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
      $(location).attr('href', ara);
    }

    // if ($.cookie('competition-cookie') === '' || $.cookie('competition-cookie') === 'undefined' || $.cookie('competition-cookie') !== 'yes' ) {
    //   var fancy = 'home';

    // }

  </script>


  <?php
	include 'includes/header_nav.php';
?>
    <div class="main-content home-copy">
      <div class="left-container">
        <div class="hippo-large">
          <img src="elements/hippo-large.png" alt="">
        </div>
      </div>
      <div class="home-container">
        <div class="right-container">
          <h1 class="highlight">WHY FAT bastard?</h1>
          <p>When <span class="highlight smcap tandg"><span class="cap">T</span>hierry and <span class="cap">G</span>uy</span> first created these delicious wines, they did it with gusto. They poured their hearts, souls and great dollops of generosity into
            every bottle.
            <br> In fact, it was a great big discovery (in winemaking terms) that led to the name <span class="highlight fb">'FAT bastard.'</span> <span class="mobile-hide-read-more "> It comes from having left the wine on the lees for a lot longer than usual, which allowed it to develop more fully and completely. And when tasted, there was simply no other way to describe it other than: <span class="highlight saying">"Well, now that's a FAT bastard!"</span>            </p>
          <p>
            This tradition of creating full-bodied wines to be enjoyed with bellyfuls of laughs and good-natured cheer continues today. Our winemakers give nothing short of their all when meticulously nurturing them to perfection. Whether it's a celebration, a kuier
            or a <span class="highlight">"COME ON OVER!"</span>, there's a FAT bastard (or two) waiting to be opened.</p>
          </span>
          <br>
          <button class="hidden-desktop read-more">Read More</button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div>
      <div class="call-to-action-divider">
        <h1>Go on, OPEN A BOTTLE <br class="hidden-desktop"> and wallow in <i>luxury</i>.</h1>
      </div>

     <!--  <div class="call-to-action-divider competition">
        <div class="inner">
          <a href="#winDialog" class="win-fancy" style="display:none;"></a>

          <a href="<?= $base_path; ?>pages/competition_signup.php">
            <div class="button">
              <h1>Click to <span class="highlight">WIN</span></h1></a>
          </div>
          <p>
            and receive news, promos and
            <br> other information from us.
          </p>
          <a href="http://www.fatbastardwine.co.za/tandc.html" target="_blank" class="terms-and-cons">TERMS &amp; CONDITIONS</a>
        </div>

      </div> -->

      <div id="winDialog" class="win-dialog" style="display:none;">
        <div class="inner">
          <div class="main-content">
            <div class="left win-icon-container fat-chance">
              <img src="elements/fat_chance_pop-up_2x.png" alt="" />
            </div>
						<div class="clearfix"></div>

          </div>
        </div>

        <div class="clearfix"></div>

        <a href="<?= $base_path; ?>pages/competition_signup.php">
          <button class="primary" id="signup-competition" type="button" name="button">SIGN UP</button>
        </a>
        <div class="clearfix"></div>
      </div>

      <div class="call-to-action">
        <div class="left-container">
          <div class="outer">
            <div class="stamp stamp-1"></div>
            <div class="inner">
              <h2>Show the world how you</h2>
              <h1>LIVE LARGE.</h1>
              <a href="pages/live_large.php">
                <button>SEND A PERSONALISED POSTCARD</button>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="right-container">
          <div class="outer">
            <div class="stamp stamp-2"></div>

            <div class="inner">
              <h2>Subscribe to recieve our </h2>
              <h1>LATEST NEWS.</h1>
              <a href="pages/contact.php">
                <button>CLICK HERE</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <script>
      </script>
      <?php
	include 'includes/footer.php';
?>
        <script>
        </script>
        <script>
          $('a.home').css({
            'font-weight': '800',
            'color': '#EAB332'
          });
        </script>
        <script language='JavaScript1.1' src='//pixel.mathtag.com/event/js?mt_id=867221&mt_adid=116130&v1=&v2=&v3=&s1=&s2=&s3='></script>

