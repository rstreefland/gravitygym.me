<?php include "./includes/header.php";

$targetMoney = 1500000;
$raisedMoney = 317460;

?>
<div class="block bg bg1 align-center">
	<div class="wrap">
		<h1 class="fontsize-xhuge">Welcome to Gravity Gym.</h1>
		<h2 class="fontsize-large">We're going to be the best gym in Springton. But to do it, we need your help.</h2>
	</div>
</div>
<div class="block bg-black">
	<div class="wrap small align-center">
		<p><progress value="<?php echo $raisedMoney;?>" max="<?php echo $targetMoney;?>"></progress></p>
		<p class="fontsize-tiny">£<?php echo $raisedMoney;?> raised of £<?php echo $targetMoney;?></p>
		<p>Vestibulum tortor nisi, posuere eget risus vel, dictum rutrum ex.<p>
		<p>Praesent sit amet posuere neque, sed convallis arcu. Vestibulum dapibus mollis est, at placerat leo luctus sit amet. </p>
		<a href="#" class="button">Donate now<br/><i class="fa fa-paypal"></i></a>
	</div>
</div>
<div class="wrap">
	<h2>Classes</h2>
	<h2>Freerunning USP</h2>
	<h2>Testimonials</h2>
	<h2>About (short summary)</h2>
</div>
<?php include "./includes/footer.php"; ?>