<section class="contact">
	<div class="container">
		<h1>Contact <small>ampnet(<span>media</span>)</small></h1>

		<section class="contact-content">
			<h3> - (214) 702-6752 - Dallas, TX</h3>
			<blockquote>Have questions or concerns for our team? Shoot us an email here and we'll get back with you as soon as possible. Give us your name, email address, city where you reside, and a detailed message here. We love hearing from our clients and potential clients, so if you have any questions or concerns please do not hesitate to contact us!</blockquote>
		</section>

		<section class="contact-form">
			<?php 
			if($errors) { ?>
				<div class="error-box">
					<ul>
						<?php foreach ($errors as $error) {
							?>
							<li><?php echo $error; ?></li>
							<?php
						} ?>
					</ul>
				</div>
			<?php } ?>
			
			<form role="form" action="" method="post" class="stacked-form">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" id="name" placeholder="Full Name" name="name" />
				</div>
				<div class="form-group">
					<label for="company">Company Name:</label>
					<input type="text" id="company" placeholder="Company Name (optional)" name="company" />
				</div>
				<div class="form-group">
					<label for="email">Contact Email:</label>
					<input type="text" id="email" placeholder="Contact@Email.com" name="email" />
				</div>
				<div class="form-group">
					<label for="phone">Contact Phone#:</label>
					<input type="text" id="phone" placeholder="Contact Phone# (optional)" name="phone" />
				</div>
				<div class="form-group">
					<label for="reason">Reason For Contacting:</label>
					<select id="reason" name="reason">
						<option>- Select Reason -</option>
						<option>Looking for a quote</option>
						<option>Need more info.</option>
						<option>Other</option>
					</select>
				</div>
				<div class="form-group">
					<label for="message">More details:</label>
					<textarea id="message" name="message" placeholder="Ender more details here."></textarea>
				</div>
				<input type="submit" value="Send!" class="btn-submit" />
				<input type="hidden" name="site" value="ampnetmedia">
				<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
			</form>
		</section>
	<div>
</section>
