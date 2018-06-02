<div id="lightbox" style="display:none;">
<main class="contact-form fancy-lightbox">
<section>
	<h1 class="highlight">Email Your Postcard.</h1>
	 <form id="contactformshare" method="post" action="#">
		<div class="left">
			<label for="user_name"></label>
			<input class="text-input" placeholder="NAME" type="text" name="user_name" id="user_name" required/>
		</div>
		<div class="right">
			<label for="user_surname"></label>

			<input class="text-input" placeholder="SURNAME" type="text" name="user_surname" id="user_surname"  required/>
		</div>
			<label for="user_email"></label>
		<input class="text-input" placeholder="EMAIL" type="email" name="user_email" id="user_email" required/>
			<label for="user_tel"></label>

		<textarea class="text-input" rows="8" placeholder="MESSAGE" type="text" name="user_message" id="user_message"  /></textarea>

		<input type="hidden" type="text" name="user_image" id="user_image" value="<?php echo $user_image_share; ?>"/>

		<div class="clearfix"></div>
		
		<div class="submit-contact-button-container email-fancy">
			<button  type="submit" name="submit" value="Submit" class="contact-button">SEND</button>
		</div>
		<div class="clearfix"></div>
	  </form> 
</section>
</main>
</div>

<?php include '../includes/contactengineshare.php'; ?>

</div>
</div>