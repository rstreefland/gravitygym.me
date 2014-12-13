<?php include "./includes/header.php";

//These will be fetched from database
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
	<h2>About (short summary)</h2>
	<h2>Freerunning USP</h2>
</div>
<div class="block">
	<div class="wrap">
		<h2 class="align-center">Gravity gym offers a wide range of lorem ipsums. We also dolor our amets, and feel that consectetur is the best way to adipiscing.</h2>
		<!--
			This will be pulled from the database eventually.
			The closing </a> bracket has been moved to the
			following line to remove the blank space that
			appears between inline-block items.
			http://css-tricks.com/fighting-the-space-between-inline-block-elements/
		-->
		<a class="floor-fade" href="#">
			<div class="rhythmicgymnastics">
				<h2>Rhythmic</h2>
			</div>
		</a
		><a class="floor-fade w2" href="#">
			<div class="freerunning">
				<h2>Freerunning</h2>
			</div>
		</a
		><a class="floor-fade" href="#">
			<div class="parallelbars">
				<h2>Parallel bars</h2>
			</div>
		</a
		><a class="floor-fade" href="#">
			<div class="trampoline">
				<h2>Trampoline</h2>
			</div>
		</a
		><a class="floor-fade" href="#">
			<div class="lorem">
				<h2>Lorem</h2>
			</div>
		</a
		><a class="floor-fade" href="#">
			<div class="ipsum">
				<h2>Ipsum</h2>
			</div>
		</a
		><a class="floor-fade" href="#">
			<div class="dolor">
				<h2>Dolor</h2>
			</div>
		</a>
	</div>
</div>
<div class="wrap">
	<h2>Testimonials</h2>
</div>
<?php include "./includes/footer.php"; ?>