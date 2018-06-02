
<?php

// echo $_SESSION['day'];
// echo $_SESSION['month'];
// echo $_SESSION['year'];
// echo $_SESSION['userLocation'];
// echo $_SESSION['user_name'];
// echo $_SESSION['user_surname'];
// echo $_SESSION['user_email'];
// echo $_SESSION['user_tel'];


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
<div class="main-content contact-copy">
<div>
	<p>No one loves a <span class="highlight">GET TOGETHER</span> more than us and we'd love it if we could grow our circle of friends by adding you.</p>
	<h3>SO GET IN TOUCH.</h3>
	<p><i>As they say, the more, the merrier. <br> Cheers! </i></p>
</div>
<div class="clearfix"></div>
</div>
<div class="contact-form">
<div>
	<form  id="contactform" method="post"  action="#">
		<div class="left">
			<!-- <p for="user_name"></p> -->
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
		<textarea class="text-input" rows="8" placeholder="MESSAGE" type="text" name="user_message" id="user_message" required /></textarea>
		<input type="hidden" name="day" id="day" value="<?php echo $_SESSION['day']; ?>"/>
		<input type="hidden" name="month" id="month" value="<?php echo $_SESSION['month']; ?>" />
		<input type="hidden" name="year" id="year" value="<?php echo $_SESSION['year']; ?>" />

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
			<p class="consent">Do you consent to Fat Bastard keeping in touch?</p>
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
		<p class="opening-text">This is the South African Fat Bastard Website, <br>
			<span class="smaller">
		To view the Fat Bastard Website for Europe and Asia <a  class="highlight" href="http://international.fatbastard.com/">click here.</a>
		<br>
		To view the Fat Bastard Website for the US and Canada <a  class="highlight" href="http://fatbastard.com/?country=us">click here.</a>
		</span>
	</p>
	<p>Email: <a href="mailto:info@fatbastardwine.co.za?subject=Enquiry from your website">info@fatbastardwine.co.za</a></p>
</div>
</div>
<div style="display:none;">
	
	<p>?success?
	Thanks. Your details are splendidly copious. We’re thrilled to welcome you to our pod of Fat Bastards.</p>
	<p>?error?
	Oops, looks like we don’t have your details in all their glory. Please try again.</p>
</div>
<?php
	include '../includes/footer.php';
	include 'processing/contactengine.php';
?>

<script type="text/javascript">
$(document).ready(function(){

	// $('#contactform').validate();

	$('#contact-button').click(function(e){
		$('#contactform').validate({
            rules: {
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
            }
		});

		if($('#contactform').valid()){
			e.preventDefault();
		  //   $.ajax({
				// type: "POST",
				// url: "processing/contact_form_save.php",
				// data: $('#contactform').serialize(),
				// success: function(data) {
			 //    $.ajax({
				// 	type: "POST",
				// 	url: "processing/contactengine.php",
				// 	data: $('#contactform').serialize()
				// });
				// }
			// });
			$('#success').text('Thanks. Your details are splendidly copious. We’re thrilled to welcome you to our pod of Fat Bastards.');
			setTimeout(function(){ $('#success').text(''); }, 8000);
			e.preventDefault();
			$("form#contactform").submit();
			setTimeout(function(){ window.location.href = 'contact.php'; }, 8000);
		}else{
			$( "<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>" ).insertBefore( "user_conditions-error" );
			$("#squaredTwo-conditions").after("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>");
			$("<label for='squaredTwo-conditions' id='squaredTwo-conditions-label'></label>").insertAfter("#squaredTwo-conditions");
			//alert('Please complete form');
			 e.preventDefault();
		}
	});
		$( "#user_tel" ).rules( "add", {
	        required: true,
	        number: true,
	        minlength: 2
		});

	// $('.contact-button').hover(function(event) {
		// window.location.href = 'contact.php'
				// $('#success').text('Thanks. Your details are splendidly copious. We’re thrilled to welcome you to our pod of Fat Bastards.')
				//  setTimeout(function(){ $('#success').text(''); }, 8000);
		
	// });
});
</script>
<script>
	$('a.get-in-touch').css({
		'font-weight': '800',
		'color': '#EAB332'
	});
</script>