<?php include "../includes/header.php"; ?>
<div class="wrap small pad-top">
	<div class="row align-center">
		<h1>Thank you, <?php echo $_POST['firstname'];?></h1>
		<p>Your donation of £<?php echo $_POST['amount'];?> has been received.</p>
		<p>We've sent your donation code to <?php echo $_POST['email'];?>.</p>
		<p class="fontsize-small faint pad-top">(Not really)</p>
	</div>
</div>

<?php include "../includes/footer.php"; ?>
