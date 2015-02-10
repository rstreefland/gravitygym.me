<?php include "./includes/header.php";

//These will be fetched from database
$targetMoney = 1500000;
$raisedMoney = 317460;

?>
<div class="block large pad bg bg1 align-center">
	<div class="wrap">
		<div class="row">
			<h1 class="twelve columns fontsize-xhuge">Welcome to Gravity Gym.</h1>
			<h2 class="twelve columns fontsize-large">We're going to be the best gym in Springton. But to do it, we need your help.</h2>
		</div>
	</div>
</div>
<div class="block hcontrast">
	<div class="wrap">
		<div class="row">
			<p class="twelve columns align-center"><progress value="<?php echo $raisedMoney;?>" max="<?php echo $targetMoney;?>"></progress></p>
		</div>
		<div class="row">
			<p class="twelve columns align-center fontsize-tiny">£<?php echo number_format($raisedMoney);?> raised of £<?php echo number_format($targetMoney);?></p>
		</div>
		<div class="row">
			<p class="eight columns offset-by-two align-center">Vestibulum tortor nisi, posuere eget risus vel, dictum rutrum ex. Praesent sit amet posuere neque, sed convallis arcu. Vestibulum dapibus mollis est, at placerat leo luctus sit amet. </p>
		</div>
		<div class="row align-center">
			<a class="button" href="#">Donate now<br/><i class="fa fa-paypal"></i></a>
		</div>
	</div>
</div>
<div class="block huge pad bg bg4">
	<div class="wrap">
		<div class="row">
			<div class="eight columns">
				<h2>About</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
			</div>
		</div>
	</div>
</div>
<div class="block huge pad bg bg5">
	<div class="wrap">
		<div class="row">
			<div class="eight columns offset-by-four">
				<h2>Freerunning</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
			</div>
		</div>
	</div>
</div>
<div class="block">
	<div class="wrap">
		<div class="row">
			<h2 class="align-center">Gravity gym offers a wide range of lorem ipsums. We also dolor our amets, and feel that consectetur is the best way to adipiscing.</h2>
			<!--
				This will be pulled from the database eventually.
				The space after </a> has been shifted to the
				following line to remove the blank space that
				appears between inline-block items.
				http://css-tricks.com/fighting-the-space-between-inline-block-elements/
			-->
		</div>
		<div class="row">
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
			</a>
		</div>
		<div class="row">
			<a class="floor-fade" href="#">
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
</div>
<div class="wrap">
	<div class="row">
		<h2 class="twelve columns">Testimonials</h2>
	</div>
	<?php for ($i = 1; $i <= 4; $i++) { ?>
	<div class="testimonial">
		<img class="circle" src="<?php echo thumb($rootpath.'images/people/testimonial'.$i.'.jpg', 200)?>">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. <span>John Smith, age 6</span></p>
	</div>
	<?php } ?>
</div>
<?php include "./includes/footer.php"; ?>
