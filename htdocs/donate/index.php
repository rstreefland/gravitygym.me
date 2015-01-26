<?php include "../includes/header.php";

//amount => description
//will eventually be pulled from a database
$amounts = array(
	10 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	20 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	50 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	100 => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'Other' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
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
	<div class="row">
		<?php foreach ($amounts as $amount => $description) { ?>
		<div class="donate">
			<div class="amount">
			</div>
			<div class="description">
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<?php include "../includes/footer.php"; ?>
