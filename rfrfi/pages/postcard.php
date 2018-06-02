<?php
	include 'includes/config.php';
	include 'includes/head.php';
	include 'includes/header_nav.php';
?>
			<div role="tabpanel" class="live-large-content design tab-pane" id="design">
				<div class="top">
					<h1>Design Your Postcard</h1>
					<div class="left-right">
						<div class="left">
							<div class="postcard-design">
								<img src="../elements/postcard_choice.png" alt="">
							</div>
						</div>
						<div class="right">
							<p>Heading</p>
							<input class="text-input" placeholder="HAPPY MOTHERS DAY" type="text" name="user_heading" id="user_heading" required />
							<p>Message</p>
							<textarea name="user_message_postcard" placeholder="HAPPY MOTHERS DAY" id="" rows="10"></textarea>
							<div class="left color-left-panel">
								<div class="picker-left-panel">
									<img height="150" width="150" src="../elements/text-color.png" alt="" id="leftColor" />
									<div id="result_test"></div>
								</div>
								<span class="color-left-text"><div class="left-color"></div><p>Left Panel</p></span>
							</div>
							<div class="right color-left-panel">
								<div class="picker-right-panel">
									<img height="150" width="150" src="../elements/text-color.png" alt="" id="rightColor" />
									<div id="result_test"></div>
								</div>
								<span class="color-right-text"><div class="right-color"></div><p>Right Panel</p></span>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom">
					<p>If you are happy with your Postcard design, please proceed.</p>
					<div class="button-container">
						<a href="#share" id="design-next" aria-controls="design" role="tab" data-toggle="tab">
							<button class="gold">Next</button>
						</a>
					</div>
				</div>
			</div>
<div class="clearfix"></div>
<?php
	include 'includes/footer.php';
?>