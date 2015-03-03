<?php include "./includes/header.php";

//These will be fetched from database
$targetMoney = 1500000;
$raisedMoney = ($donateFinished ? $targetMoney : 317460);

?>
<div class="block large pad bg parallax-window align-center" data-parallax="scroll" data-image-src="<?php echo $rootpath;?>images/block-bg/1.jpg">
	<div class="wrap align-center">
		<div class="row">
			<h1 class="twelve columns fontsize-xhuge">Welcome to Gravity Gym.</h1>
			<?php if ($donateFinished) { ?>
			<h2 class="twelve columns fontsize-large">We're building the best gym in Springton. Thank you for supporting us.</h2>
			<?php } else { ?>
			<h2 class="twelve columns fontsize-large">We're going to be the best gym in Springton. But to do it, we need your help.</h2>
			<?php } ?>
		</div>
		<div class="row">
			<p class="twelve columns"><progress value="<?php echo $raisedMoney;?>" max="<?php echo $targetMoney;?>"></progress></p>
		</div>
		<div class="row">
			<p class="twelve columns fontsize-tiny">£<?php echo number_format($raisedMoney);?> raised of £<?php echo number_format($targetMoney);?></p>
		</div>
		<?php if (!$donateFinished) { ?>
		<div class="row">
			<p class="eight columns offset-by-two">In order to achieve our goal, we need to raise £1,500,000, and we can't do that without your contributions, so please donate if you can. Each donation level will get you different rewards you can reclaim at the gym when we have reached our goal!</p>
		</div>
		<div class="row">
			<a class="button" href="<?php echo $rootpath?>donate/">Donate now<br/><i class="fa fa-paypal"></i></a>
		</div>
		<?php } ?>
	</div>
</div>
<div class="block huge pad bg bg4">
	<div class="wrap">
		<div class="row">
			<div class="eight columns">
				<h2>About</h2>
				<p>We are Gravity Gym. We are the most up to date and infuential gym in the country. With the help of your generous donations we are buying state-of-the-art equipment for all our members to use whenever they like. We cater to all people from all walks of life and would love to see you come along to some of our classes on anything and everything gymnastics. Our team are passionate and dedicated to making sure that you get the best learning experience possible in the safest way and the way that suits you best. See you soon!</p>
			</div>
		</div>
	</div>
</div>
<div class="block huge pad bg parallax-window nofade" data-parallax="scroll" data-image-src="<?php echo $rootpath;?>images/block-bg/5.jpg">
	<div class="wrap">
		<div class="row">
			<div class="eight columns offset-by-four">
				<h2>Freerunning</h2>
				<p>Our Freerunning classes are our specialty, and are like no other. With our equipment and trained professionals we can help you reach limits that you didnt even know you had using a wide range of equipment which will allow you to practice in a safe and comfortable environment so you can take your newly learned skills literally wherever you want.</p>
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
					<h2>Floor</h2>
				</div>
			</a
			><a class="floor-fade" href="#">
				<div class="ipsum">
					<h2>Children Welcome!</h2>
				</div>
			</a
			><a class="floor-fade" href="#">
				<div class="dolor">
					<h2>You can do jumping!</h2>
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
		<p>I really love Gravity Gym, all of the teachers are so friendly, I can't wait for them to open up their new site so I can learn even more! <span>Eleanor Smith, age 6</span></p>
	</div>
	<?php } ?>
</div>
<?php include "./includes/footer.php"; ?>
