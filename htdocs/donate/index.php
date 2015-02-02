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
