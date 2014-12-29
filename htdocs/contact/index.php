<?php include "../includes/header.php"; ?>
<div class="wrap">
	<form action="send.php" method="post">
		<div class="row">
			<div class="six columns">
				<label class="pad-top" for="name">Name</label> 
				<input type="name" id="name" name="name" class='error'>
			</div>

			<div class="six columns">
				<label class="pad-top" for="email">Email</label>
				<input type="text" id="email" name="email">
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<label class="pad-top" for="subject">Subject</label>
				<input type="text" id="subject" name="subject">
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<label class="pad-top" for="message">Message</label>
				<textarea name="message" id="message"></textarea>
			</div>
		</div>
			
		<div style="display:none;">
			<label class="pad-top" for="blank">Please leave blank:</label>
			<input type="text" id="blank" name="blank">
		</div>

		<div class="row">
			<div class="twelve columns align-center">
				<button type="submit" class="button">Send <i class="fa fa-paper-plane-o"></i></button>
			</div>
		</div>
		</form>
	</div>
</div>
<?php include "../includes/footer.php"; ?>