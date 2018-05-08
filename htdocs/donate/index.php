<?php include "../includes/header.php";

//amount => description
//will eventually be pulled from a database
$query = $dbView->query("SELECT amount,description,getsUs,getsYou FROM donationDetails");

$result = queryToArray($query);

if (isset($_GET['p'])) {
	$amount = $dbEdit->real_escape_string($_GET['p']);

?>
<div class="wrap small pad-top">
	<form class="border align-center" style="padding: 1em" action="submit.php" method="POST">
		<h2>I would like to donate:</h2>
		<div class="row">
			<input class="fontsize-xlarge align-center four columns offset-by-four" type="text" name="amount"
				   value="<?php echo ($amount != 0 ? $amount : '');?>" />
		</div>
		<p>Or select another amount:</p>
		<div class="row pad-left">
			<?php foreach ($result as $row) {
			if ($amount != $row['amount']) {
			?>
				<a class="button three columns" href="<?php echo $rootpath.'donate/?p='.$row['amount'];?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($row['amount'] == 0 ? 'Other' : '£'.$row['amount']);?>
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
			<label class="three columns" for="firstname">First name</label>
			<input class="nine columns" type="text" name="firstname">
		</div>
		<div class="align-left row pad-top">
			<label class="three columns" for="lastname">Last name</label>
			<input class="nine columns" type="text" name="lastname">
		</div>
		<div class="pad-top">
			<button class="button-primary" type="submit">Submit</button>
		</div>
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
	<?php foreach ($result as $row) {
	?><div class="donate-container">
		<div class="donate">
			<div class="description">
				<p><?php echo $row['description'];?></p>
			</div>
			<div class="amount">
				<a class="button" href="<?php echo $rootpath.'donate/?p='.$row['amount'];?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($row['amount'] == 0 ? 'Other' : '£'.$row['amount']);?>
				</a>
			</div>
		</div>
	</div><?php } ?>
</div>
<div class="wrap">
	<?php $template = $templater->loadModule('donatemodule.html');
		$query = $dbView->query("SELECT * FROM donationDetails WHERE amount > 0");

		while ($row = $query->fetch_assoc()) {
			$template->render(array(
				"image" => thumb($rootpath.'images/amounts/'.$row['amount'].'.jpg', 400),
				"URL" => './?p='.$row['amount'],
				"donate-button-text" => ($row['amount'] == 0 ? "Donate other amount" : "Donate £" . $row['amount']),
				"amount-text" => ($row['amount'] == 0 ? 'Other' : '£'.$row['amount']),
				"gets-us" => $row['getsUs'],
				"gets-you" => $row['getsYou']
			));
		}

		$query = $dbView->query("SELECT * FROM donationDetails WHERE amount = 0");
		$row = $query->fetch_assoc();
		$template->render(array(
			"image" => thumb($rootpath.'images/amounts/'.$row['amount'].'.jpg', 400),
			"URL" => './?p='.$row['amount'],
			"donate-button-text" => ($row['amount'] == 0 ? "Donate other amount" : "Donate " . $row['amountText']),
			"amount-text" => ($row['amount'] == 0 ? 'Other' : '£'.$row['amount']),
			"gets-us" => $row['getsUs'],
			"gets-you" => $row['getsYou'],
		));



	?>
</div>
<div class="wrap align-center">
	<?php foreach ($result as $row) {
	?><div class="donate-container">
		<div class="donate">
			<div class="description">
				<p><?php echo $row['description'];?></p>
			</div>
			<div class="amount">
				<a class="button" href="<?php echo $rootpath.'donate/?p='.$row['amount'];?>">
					<?php
					//If amount is other, then print "Other". Otherwise, add a pound sign and print the amount
					echo ($row['amount'] == 0 ? 'Other' : '£'.$row['amount']);?>
				</a>
			</div>
		</div>
	</div><?php } ?>
</div>
<?php } include "../includes/footer.php"; ?>
