<?php include "../includes/header.php";
if (isSet($_GET['p'])) {
	$template = $templater->loadModule('newsitem.html');
	$template->render(array(
		"backgroundclass" => "",
		"title" => "Title",
		"date" => "3rd February 2014",
		"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.",
		"URL" => 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
	));
} else {
?>
<div class="wrap align-center">
	<a href="./?p=1">News item</a>
</div>
<?php } include "../includes/footer.php"; ?>
