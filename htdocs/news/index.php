<?php include "../includes/header.php";
if (isSet($_GET['p'])) {

	echo "p";
} else {
?>
<div class="wrap align-center">
	<a href="./?p=1">News item</a>
</div>
<?php } include "../includes/footer.php"; ?>
