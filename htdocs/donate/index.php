<?php include "../includes/header.php";

//amount => description
//will eventually be pulled from a database
$amounts = array(
	10 => 'With your generous funding, we can lorem ipsum dolor.',
	20 => 'For just £20 a month, we could afford to adipiscing est.',
	50 => 'With £50, we could lorem much more ipsums.',
	100 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'Other' => 'Pellentesque mollis libero at diam volutpat.'
);

if (isset($_GET['p'])) {
	$amount = mysqli_real_escape_string($dbedit, $_GET['p']);
?>
<div class="wrap small pad-top">
	<form class="border align-center" style="padding: 1em" action="submit.php" method="POST">
		<h2>I would like to donate:</h2>
		<div class="row">
			<input class="fontsize-xlarge align-center four columns offset-by-four" type="text" name="amount"
				   value="<?php echo ($amount != 'Other' ? $amount : '');?>" />
		</div>
		<p>Or select another amount:</p>
		<div class="row pad-left">
			<?php foreach ($amounts as $otherAmount => $description) {
			if ($amount != $otherAmount) {
			?>
				<a class="button three columns" href="<?php echo $rootpath.'donate/?p='.$otherAmount;?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($otherAmount == 'Other' ? 'Other' : '£'.$otherAmount);?>
				</a>
		<?php }} ?>
		</div>
		<div class="row pad-top">
			<span class="four columns"><label><input type="radio" name="occurence" value="weekly" /> Weekly</label></span>
			<span class="four columns"><label><input type="radio" name="occurence" value="monthly" /> Monthly</label></span>
			<span class="four columns"><label><input type="radio" name="occurence" value="once" checked/> Once only</label></span>
		</div>
		<div class="align-left row pad-top">
			<label class="three columns" for="email">Email</label>
			<input class="nine columns" type="email" name="email">
		</div>
		<div class="align-left row pad-top">
			<label class="two columns" for="firstname">First name</label>
			<input class="four columns" type="text" name="firstname">
			<label class="two columns" for="lastname">Last name</label>
			<input class="four columns" type="text" name="lastname">
		</div>
		<button type="submit">Submit</button>
	</form>
</div>
<?php } else { ?>
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
<?php } include "../includes/footer.php"; ?>
