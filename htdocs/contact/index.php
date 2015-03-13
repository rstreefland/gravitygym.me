<?php include "../includes/header.php"; ?>

<div class="block pad bg bg7 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Contact Us</h1>
		</div>
	</div>
</div>


<div class="wrap">
	<form action="send.php" method="post">
		<div class="row">
			<div class="six columns">
				<label class="pad-top" for="name">Name</label>
				<input type="text" id="name" name="name" class='error'>
			</div>

			<div class="six columns">
				<label class="pad-top" for="email">Email</label>
				<input type="email" id="email" name="email">
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
    <div class = "row pad-top">
        <div class = "six columns">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104937.49335482396!2d139.11432295!3d-34.72291575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab7602e4c759ed9%3A0x4033654628edcf0!2sSprington+SA+5235%2C+Australia!5e0!3m2!1sen!2suk!4v1423562267423" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <div class = "six columns">
            <h3 class="no-margin">Gravity Gym Address</h3>
            <p class="no-margin">Gravity Gym</p>
            <p class="no-margin">Whiteknights</p>
            <p class="no-margin">PO Box 217</p>
            <p class="no-margin">Reading</p>
            <p class="no-margin">Berkshire</p>
            <p class="no-margin">RG6 6AH</p>
            <p class="no-margin">United Kingdom</p>
            <h3 class = "pad-top no-margin">Telephone Number</h3>
            <p class="no-margin">+ 44 (0)118 987 5123</p>
            <h3 class = "pad-top no-margin">Email Address</h3>
            <p class="no-margin">info@gravitygym.me</p>
        </div>
	</div>
</div>
<?php include "../includes/footer.php"; ?>
