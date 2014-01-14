
<section class="success-page">
	<div class="container">
		<h1>Success <small>ampnet(<span>media</span>)</small></h1>

		<section class="success-content">
			<h2>You have successfully sent your message!</h2>
			<p>Thank you for contacting me. I'll be getting back with you as soon as possible to get your questions answered!</p>
			<h4>Message Sent:</h4>
			<ul>
				<li>From: <?php echo $success['name']; if(isset($success['company'])) { echo " (".$success['company'].") "; } ?></li>
				<li>Email: <?php echo $success['email']; ?></li>
				<li>Phone: <?php echo $success['phone']; ?></li>
				<li>Because I'm: <?php echo $success['reason']; ?></li>
				<li>Full Message: <?php echo $success['message']; ?></li>
			</ul>
		</section>
	</div>
</section>