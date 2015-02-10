<?php include "../includes/header.php";

//amount => description
//will eventually be pulled from a database
$amounts = array(
	10 => 'With your generous funding, we can lorem ipsum dolor.',
	20 => 'For just £20 a month, we could afford to adipiscing est.',
	50 => 'With £50, we could lorem much more ipsums than we\'re doing.',
	100 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'Other' => 'Pellentesque mollis libero at diam volutpat.'
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
				<h1 class="align-center">We need your help</h1>
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
			<p class="align-center">
				<a class="button-primary" href="#">Donate £<?php echo $amount;?> now<br/><i class="fa fa-paypal"></i></a>
			</p>
		</div>
		<div class="eight columns">
			<h2 class="no-margin-top">£<?php echo $amount;?> gets us:</h2>
			<p><?php echo $description;?></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
			<h2>£<?php echo $amount;?> gets you:</h2>
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
				<a class="button" href="<?php echo $rootpath.'donate/?p='.$amount;?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($amount == 'Other' ? 'Other' : '£'.$amount);?>
				</a>
			</div>
		</div>
	</div><?php } ?>
</div>
<?php include "../includes/footer.php"; ?>
