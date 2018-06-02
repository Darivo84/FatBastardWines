<?php
	include '../includes/config.php';
	include '../includes/head.php';
?>

  <script>
    if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes') {
      $(location).attr('href', ara);
    }
  </script>
  <?php include '../includes/header_nav.php'; ?>
    <div class="main-content contact-copy competition-copy">
      <div>
        <p><span style="font-size:31px;">Sign up and <span class="highlight" style="font-size:40px;">WIN</span> a weekend for 2 at</span><br> HIPPO HOLLOW COUNTRY ESTATE
				<br> <a style="font-size: 22px;" target="_blank" href="http://www.hippohollow.co.za">www.hippohollow.co.za</a></p>
        <div class="middle"><h3>Feeling Lucky?</h3>
				<div class="yellow-underline">

				</div>
        <p class="small">We’re giving you the chance to win an all expenses paid weekend away for two at <i><b><a target="_blank" href="http://www.hippohollow.co.za">Hippo Hollow Country Estate</a></b></i> in Mpumalanga.<i> Enter before xxx 2015. </i></p>
				<br>
				<p>
					Cheers!
				</p>
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

            <p>What were the names of the two founding fat bastards?</p>
            <select class="answer" name="user_answer" id="user_answer" required>
							<option value="">Please Select an Answer*</option>

              <option value="tom_and_jerry">Tom &amp; Jerry</option>
              <option value="john_and_paul">John &amp; Paul</option>
              <option value="thierry_and_guy">Thierry &amp; Guy</option>
              <option value="mick_and_keith">Mick &amp; Keith</option>

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
              <p class="consent">Yes, I would like to receive news from Fat Bastard</p>
              <div class="clearfix"></div>


              <div class="squaredTwo squaredTwo-conditions">
                <input type="checkbox" value="" id="squaredTwo-age" name="user_age" required/>
                <label  id="squaredTwo-age-label" for="squaredTwo-age"></label>
              </div>
              <p class="consent">Yes, I am over 18 and have read and accepted the <a href="#">Terms &amp; Conditions.</a></p>
              <div class="clearfix"></div>
            </div>

      </div>
      <!--<![endif]-->
      <div class="clearfix"></div>

      <div class="submit-contact-button-container">
        <button value="Send" type="submit" name="submit" id="contact-button" class="contact-button">Enter</button>

      </div>
      <div class="clearfix"></div>
			<p class="error-date error" style="display:none;" >Oops, it seems that’s not enough for a Fat Bastard. <br> Please check your details and try again.</p>

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
											// alert(data);
											console.log("was submitted");

                  }
                });
                $('#success').text('Thanks. We’re thrilled to welcome you to our pod of Fat Bastards and will announce the winner on xxx date.');
                setTimeout(function() {
                  $('#success').text('');
                }, 8000);
                setTimeout(function() {
                  window.location.href = 'competition_signup.php';
                }, 8000);
              } else {
                $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertBefore("user_conditions-error");
                $("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
                $("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
              }
            });
          }
        });
      </script>
