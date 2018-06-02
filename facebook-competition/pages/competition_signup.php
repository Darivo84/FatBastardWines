<?php
	include '../includes/config.php';
	include '../includes/head.php';
?>
<style media="screen">

body{
	background-color: #fff;
}

.fat-chance .img-cont {
    float: left;
		max-width: 246px;
		width: 30%;
}

.competition-copy div {
    max-width: 100%;
}
@media only screen and (min-device-width: 667px){
.contact-copy {
    padding: 1rem 0 14rem 0;
}

.competition-copy .middle {
	    margin-top: 0;
	    float: left;
	    max-width: 63%;
	    margin: 0 0 0 4%;
	}
}

</style>
  <script>
    // if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
    //   $(location).attr('href', ara);
    // }
  </script>
    <div class="main-content contact-copy competition-copy">
      <div class="fat-chance">
				<div class="img-cont">
      		<img src="../elements/fat_chance_pop-up_2x.png" alt="Fat Chance" />
				</div>
<div class="middle">
				<p>We’re all about <b>LIVING LARGE</b>, and what better way to live large than to kick back in the sun, a glass of wine in hand, a loved one beside you, and a big blue ocean view beckoning you ever closer. <br><br>Enter our competition and stand to win a luxurious weekend getaway in <b>Clifton</b> worth <b>R50 000.</b> <br><i>Enter before 31 December</i>.</p>
<!--
        <h3>Stand to Win:</h3>
				<div class="yellow-underline">
				</div>
        <p class="small">a luxurious weekend getaway in <i><b>Clifton</b></i> worth R50 000.


<i>Enter before 31 December 2015.</i> -->
<!-- <br>
<p style="font-size:16px;">
Terms and Conditions Apply -->
</p>
<br>
				<br>

      </div></div>
      <div class="clearfix"></div>
    </div>
    <div class="contact-form competition-form">
      <div>
        <form id="competition_form" method="post" action="">
          <div class="left">
            <label for="user_name"></label>
            <input class="text-input user_name_surname" placeholder="NAME*" type="text" name="user_name" id="user_name" <?php if(isset($_SESSION[ 'user_name'])){ echo $_SESSION[ 'user_name'];} ?> required/>
          </div>
          <div class="right">
            <label for="user_surname"></label>
            <input class="text-input" placeholder="SURNAME*" type="text" name="user_surname" id="user_surname" required/>
          </div>
          <label for="user_email"></label>
          <input class="text-input" placeholder="EMAIL*" type="email" name="user_email" id="user_email" required/>
          <label for="user_tel"></label>
          <input class="text-input" placeholder="CONTACT NUMBER*" name="user_tel" id="user_tel" required/>
          <input type="hidden" name="action" id="action" value="" />
          <p>
            When were you born:
          </p>
          <?php include '../includes/page_pieces/dob.php'; ?>

            <input type="hidden" name="day_ara" id="day_ara" value="<?php echo $_SESSION['day']; ?>" />
            <input type="hidden" name="month_ara" id="month_ara" value="<?php echo $_SESSION['month']; ?>" />
            <input type="hidden" name="year_ara" id="year_ara" value="<?php echo $_SESSION['year']; ?>" />

            <p class="left">Where Are You From?</p>
            <div class="user-location-wrapper">
              <select name="user_location" id="user_location" required>
                <option class="center" value="" selected>Select*</option>
                <option class="center" value="Eastern Cape">Eastern Cape</option>
                <option class="center" value="Free State">Free State</option>
                <option class="center" value="Gauteng">Gauteng</option>
                <option class="center" value="Kwazulu-Natal">Kwazulu-Natal</option>
                <option class="center" value="Limpopo">Limpopo</option>
                <option class="center" value="Mpumalanga">Mpumalanga</option>
                <option class="center" value="North West">North West</option>
                <option class="center" value="Northern Cape">Northern Cape</option>
                <option class="center" value="Western Cape">Western Cape</option>
                <option class="center" value="International">International</option>
              </select>
              <div class="clearfix"></div>
              <input type="hidden" name="user_location_ara" id="user_location_ara" value="<?php echo $_SESSION['userLocation']; ?>" />
            </div>

            <p>What line is best associated with FAT bastard?</p>
            <select class="answer" name="user_answer" id="user_answer" required>
							<option value="">Please Select an Answer*</option>
              <option value="live_loud">Live Loud</option>
              <option value="lol">LOL</option>
              <option value="live_large">Live Large</option>
              <option value="linger_longer">Linger Longer</option>

            </select>
            <div class="clearfix"></div>
            <!--[if lt IE 9]>
		<div class="confirm-cont">
				<input style="visibility:visible; float:left; padding:2px;"  type="checkbox" value="" id="squaredTwo-conditions" name="user_conditions" required/>
			<p class="user-conditions">I confirm that I am over the age of 18 and that I accept the <a target="_blank" href="http://www.fatbastardwine.co.za/tandc.html">t&amp;c's</a></p>

		</div>

		</div>
<![endif]-->

            <!--[if !lte IE 8]><!-->

            <div class="confirm-cont">
              <div class="squaredTwo squaredTwo-conditions">
                <input type="checkbox" value="" id="squaredTwo-conditions" name="user_subscribe" checked="checked" />
                <label for="squaredTwo-conditions"></label>
              </div>
              <p class="consent">Yes, I would like to receive news from FAT bastard</p>
              <div class="clearfix"></div>


              <div class="squaredTwo squaredTwo-conditions">
                <input type="checkbox" value="" id="squaredTwo-age" name="user_age" required/>
                <label  id="squaredTwo-age-label" for="squaredTwo-age"></label>
              </div>
              <p class="consent">Yes, I am over 18 and have read and accepted the <a target="_blank" href="http://www.fatbastardwine.co.za/tandc.html">Terms &amp; Conditions.</a></p>
              <div class="clearfix"></div>
            </div>

      </div>
      <!--<![endif]-->
      <div class="clearfix"></div>

      <div class="submit-contact-button-container">
        <button value="Send" type="submit" name="submit" id="contact-button" class="contact-button">Enter</button>

      </div>
      <div class="clearfix"></div>
			<p class="error-date error" style="display:none;" >Oops, it seems that’s not enough for a FAT bastard. <br> Please check your details and try again.</p>

      </form>
    </div>
    </div>

		<div>
		<div class="contact-info">
			<div class="fancybox"><p id="success" style="color:#EAB332;"></p></div>
		</div>
		</div>

    <?php
	include '../includes/footer.php';
?>

      <script type="text/javascript">
        $(document).ready(function() {
          console.log($('#action').val())
          var actionValue;
          actionValue = $('#action').val();
          if (actionValue == "") {
            $('#contact-button').click(function(e) {
              e.preventDefault();
              $('#competition_form').validate({
                rules: {
                  user_name: {
                    required: true,
                    minlength: 2
                  },
                  user_surname: {
                    required: true,
                    minlength: 2
                  },
                  user_email: {
                    required: true,
                    email: true
                  },
									user_tel: {
                    required: true,
                    number: true,
                    minlength: 10
                  },
									user_age: {
										required: true
									},
									user_location: {
										required: true
									},
									user_answer: {
										required: true
									}
                },
                submitHandler: function(form) {
                }
              });

						    // alert('button click');
						    var day = $("#daydropdown").val();
						    var month = $("#monthdropdown").val();
						    var year = $("#yeardropdown").val();
						    var userLocation = $("#user_location").val();
						    var age = 18;
						    var mydate = new Date();
						    mydate.setFullYear(year, month - 1, day);
						    var currdate = new Date();
						    currdate.setFullYear(currdate.getFullYear() - age);
						    if (userLocation === undefined || userLocation === "") {
						      $(".validation").text("please select a location");
						      $('select').click(function(event) {
						        $('.validation').text("");
						        $('.error-date').fadeOut();
						      });
						    } else if (day === undefined || day === "") {
						      $(".validation").text("please select a day");
						      $('select').click(function(event) {
						        $('.validation').text("");
						        $('.error-date').fadeOut();
						      });
						    } else if (month === undefined || month === "") {
						      $(".validation").text("please select a month");
						      $('select').click(function(event) {
						        $('.validation').text("");
						        $('.error-date').fadeOut();
						      });
						    } else if (year === undefined || year === "") {
						      $(".validation").text("please select a year");
						      $('select').click(function(event) {
						        $('.validation').text("");
						        $('.error-date').fadeOut();
						      });
						    } else if ((currdate - mydate) < 0) {
						      $('.error-date').show();
						      $('select').click(function(event) {
						        $('.validation').text("");
						        $('.error-date').fadeOut();
						      });
								} else{
									var dobValid = true;
								}
              if ($('#competition_form').valid() && dobValid) {
                $.ajax({
                  type: "POST",
                  url: "processing/competition_form_save.php",
                  data: $('#competition_form').serialize(),
                  success: function(data) {
											console.log("was submitted");

                  }
                });
                // tracker code here
				  var _fbq = window._fbq || (window._fbq = []);
				  if (!_fbq.loaded) {
				    var fbds = document.createElement('script');
				    fbds.async = true;
				    fbds.src = '//connect.facebook.net/en_US/fbds.js';
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(fbds, s);
				    _fbq.loaded = true;
				  }
					window._fbq = window._fbq || [];
					window._fbq.push(['track', '6043163600120', {'value':'0.00','currency':'USD'}]);


				// end of tracker code

                $('#success').text('');
                setTimeout(function() {
                  $('#success').text('');

                }, 2000);
                // setTimeout(function() {
                  window.location.href = 'success.php';
                // }, 2000);
              } else {
                $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertBefore("user_conditions-error");
                $("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
                $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
              }
            });
          }
        });
      </script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6043163600120&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>