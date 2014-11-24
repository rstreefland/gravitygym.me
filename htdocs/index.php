<?php include "./includes/header.php";

$targetMoney = 1500000;
$raisedMoney = 317460;

?>
<div class="block bg1">
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
		<button class="button">Donate now<br/><i class="fa fa-paypal"></i></button>
	</div>
</div>
<div class="wrap">
		<p>Vestibulum tortor nisi, posuere eget risus vel, dictum rutrum ex. Praesent sit amet posuere neque, sed convallis arcu. Vestibulum dapibus mollis est, at placerat leo luctus sit amet. Duis justo odio, tincidunt ac pulvinar nec, dapibus non neque. Quisque eget risus et urna tempor ultrices. Etiam id vehicula massa, eget mattis lectus. Proin consequat, elit id consequat aliquet, odio justo posuere nisl, non tempus leo purus quis erat. Fusce nibh lorem, fermentum sit amet tortor at, molestie molestie neque. Vestibulum bibendum dolor id lacus euismod scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel dolor sit amet eros egestas imperdiet vitae sed sapien. Aenean facilisis orci purus.</p>
</div>
<?php include "./includes/footer.php"; ?>