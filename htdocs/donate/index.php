<?php include "../includes/header.php";

//amount => description
//will eventually be pulled from a database
$amounts = array(
	10 => 'With your generous funding, we can rip off slightly less people.',
	20 => 'For just £20 a month, Beth could afford to eat.',
	50 => 'Now you\'re talking. Can we take those notes off your hands?',
	100 => 'Stop flashing the cash. We could really use some of that.',
	'Other' => 'Give us everything. You know you want to. It\'ll help.'
);

?>
<div class="block pad bg bg1 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Donate</h1>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="row margin-bottom">
		<div class="twelve columns">
			<div class="block pad">
				<h1 class="align-center">We need all the money</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
			</div>
		</div>
	</div>
</div>
<div class="wrap align-center">
	<?php foreach ($amounts as $amount => $description) {
	?><div class="donate-container">
		<div class="donate">
			<div class="description">
				<p><?php echo $description;?></p>
			</div>
			<div class="amount">
				<a class="button" href="<?php echo $rootpath.'donate/?p='.$amount;?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($amount == 'Other' ? 'Other' : '£'.$amount);?>
				</a>
			</div>
		</div>
	</div><?php } ?>
</div>
<div class="wrap">
	<?php foreach($amounts as $amount => $description) { ?>
	<div class="row margin-bottom margin-top">
		<div class="four columns">
			<img src="<?php echo thumb($rootpath."images/amounts/$amount.jpg", 400);?>"/>
			<a class="button-primary" href="#">Donate now<br/><i class="fa fa-paypal"></i></a>
		</div>
		<div class="eight columns">
			<h2 class="no-margin-top">£10 gets us:</h2>
			<p><?php echo $description;?></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
			<h2>£10 gets you:</h2>
			<ul>
				<li>A week of yolo</li>
				<li>A two month supply of swag</li>
				<li>Free access to bling</li>
			</ul>
		</div>
	</div>
	<?php } ?>
</div>
<div class="wrap align-center">
	<?php foreach ($amounts as $amount => $description) {
	?><div class="donate-container">
		<div class="donate">
			<div class="description">
				<p><?php echo $description;?></p>
			</div>
			<div class="amount">
				<span class="button js-activeOnClick-donate" data-value="<?php echo $amount;?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($amount == 'Other' ? 'Other' : '£'.$amount);?>
				</span>
			</div>
		</div>
	</div><?php } ?>
</div>

<!-- Link to the payment page, with the amount set from clicking the boxes above -->
<p class="align-center"><a class="button-primary js-setHref-donate" href="./pay/?p=<?php echo $amount?>">Make donation<span class="js-setValue-donate"></span><br/><i class="fa fa-paypal"></i></a></p>
<?php include "../includes/footer.php"; ?>
