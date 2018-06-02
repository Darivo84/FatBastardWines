<?php
	include '../includes/config.php';
	include '../includes/head.php';
?>

<script>
//if ($.cookie('is_legal') === '' || $.cookie('is_legal') === 'undefined' || $.cookie('is_legal') !== 'yes'){$(location).attr('href', ara);}
</script>
<?php include '../includes/header_nav.php'; ?>
<div class="main-content contact-copy">
	<div>
		<p>No one loves a <span class="highlight">GET TOGETHER</span> more than us and we'd love it if we could grow our circle of friends by adding you.</p>
		<br>
		<br>
		<p><i>As they say, the more, the merrier. <br> Cheers! </i></p>
	</div>
	<div class="clearfix"></div>
</div>
<div class="contact-form">
<div>
	<form id="contactform" method="post"  action="">
		<div class="left">
			<label for="user_name"></label>
			<input class="text-input user_name_surname" placeholder="NAME*" type="text" name="user_name" id="user_name" <?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name'];} ?> required/>
		</div>
		<div class="right">
			<label for="user_surname"></label>
			<input class="text-input" placeholder="SURNAME*" type="text" name="user_surname" id="user_surname" required/>
		</div>
		<label for="user_email"></label>
		<input class="text-input" placeholder="EMAIL*" type="email" name="user_email" id="user_email" required/>
		<label for="user_tel"></label>
		<input class="text-input" placeholder="CONTACT NUMBER*"  name="user_tel" id="user_tel" required/>
		
		<input type="hidden" name="action" id="action" value=""/>
		<p>
			Date Of Birth
		</p>
		<?php include '../includes/page_pieces/dob.php'; ?>
		<input type="hidden" name="day_ara" id="day_ara" value="<?php echo $_SESSION['day']; ?>"/>
		<input type="hidden" name="month_ara" id="month_ara" value="<?php echo $_SESSION['month']; ?>" />
		<input type="hidden" name="year_ara" id="year_ara" value="<?php echo $_SESSION['year']; ?>" />

		<p class="left new">Where Are You From?</p>
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

			<input type="hidden"  name="user_location_ara" id="user_location_ara" value="<?php echo $_SESSION['userLocation']; ?>"/>

		</div>

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
				<input type="checkbox" value="" id="squaredTwo-conditions" name="user_conditions"/>
				<label for="squaredTwo-conditions"></label>
			</div>
			<p class="consent new">Do you consent to FAT bastard keeping in touch?</p>
		<div class="clearfix"></div>

			<div class="squaredTwo squaredTwo-conditions">
				<input type="checkbox" value="" id="squaredTwo-human" name="user_human" required/>
				<label id="squaredTwo-human-label" for="squaredTwo-human"></label>
			</div>
			<p class="consent new">Are you human?</p>
		<div class="clearfix"></div>
		</div>

		</div>
	<!--<![endif]-->
		<div class="clearfix"></div>

		<div class="submit-contact-button-container">
			<button value="Send"  type="submit" name="submit" id="contact-button" class="contact-button">Send</button>
		</div>
		<div class="clearfix"></div>
	</form>
</div>
</div>
<div>
<div class="contact-info">
	<div class="fancybox"><p id="success" style="color:#EAB332;"></p></div>
	
</div>
</div>
<div style="display:none;">

	<p>?success?
	Thanks. Your details are splendidly copious. We’re thrilled to welcome you to our pod of FAT bastards.</p>
	<p>?error?
	Oops, looks like we don’t have your details in all their glory. Please try again.</p>
</div>
<?php
	include '../includes/footer.php';
	// include '../includes/contactengine.php';
?>

<script type="text/javascript">
$(document).ready(function(){
console.log( $('#action').val() )
	var actionValue;
	actionValue = $('#action').val();
if (actionValue == "") {
	$('#contact-button').click(function(e){
		//remove e.preventDefault(); and form will work...
		e.preventDefault();
		$('#contactform').validate({
            rules: {
            	user_human:{
            		required: true,
            	},
                user_name:{
                    required: true,
                    minlength: 2,
                },
                user_surname:{
                    required: true,
                    minlength: 2,
                },
                user_tel:{
                    required: true,
                    number: true,
                    minlength: 10,
                },
                user_email:{
                    required: true,
                    email: true,
                },
                user_message:{
                    required: true,
                    minlength: 10,
                }
            },
            submitHandler: function(form) {
                form.submit();
                // $("form#contactform").submit();
            }
		});
		if($('#contactform').valid()) {
		    $.ajax({
				type: "POST",
				url: "processing/subscription-form.php",
				data: $('#contactform').serialize(),
				success: function(data) {
					// alert(data);
				    // $.ajax({
						// type: "POST",
						// url: "../includes/contactengine.php",
						// data: $('#contactform').serialize()
					// });
				}
			});
			$("form#contactform").submit();
			console.log("was submitted");
			$('#success').text('Thank you for signing up for our newsletter.');
			setTimeout(function(){ $('#success').text(''); }, 8000);
			// setTimeout(function(){ window.location.href = 'contact.php'; }, 8000);
		}else{
			$( "<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>" ).insertBefore( "user_conditions-error" );
			$("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
			$("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
			//alert('Please complete form');
		}
	});
}
else{
	console.log("not ok");
	console.log(actionValue);

}

		// $( "#user_tel" ).rules( "add", {
	 //        required: true,
	 //        number: true,
	 //        minlength: 2
		// });


});
</script>
<script>
	// $('a.get-in-touch').css({
	// 	'font-weight': '800',
	// 	'color': '#EAB332'
	// });
</script>
