<?php include "../includes/header.php";

$newsItems = array(
	//Title => image
	'fun-run' => array(
		'image' => $rootpath.'images/uploads/demo.jpg',
		'title' => 'Fun run',
		'date' => '3rd February 2014',
		'content' => $lipsum->getParagraphs(3)
	),
	'charity-event' => array(
		'image' => $rootpath.'images/uploads/charity-event.jpg',
		'title' => 'Charity event',
		'date' => '3rd February 2014',
		'content' => $lipsum->getParagraphs(3)
	),
	'personal-trainers-wanted' => array(
		'image' => $rootpath.'images/uploads/training.jpg',
		'title' => 'Personal trainers wanted',
		'date' => '3rd February 2014',
		'content' => $lipsum->getParagraphs(3)
	),
	'win-a-bike' => array(
		'image' => $rootpath.'images/uploads/bike.jpg',
		'title' => 'Win a bike',
		'date' => '3rd February 2014',
		'content' => $lipsum->getParagraphs(3)
	)
);

if (isSet($_GET['p'])) {
	$settings = $newsItems[$_GET['p']];
	$settings['URL'] = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$template = $templater->loadModule('newsitem.html');
	$template->render($settings);

} else {
?>
<div class="block pad bg parallax-window align-center" data-parallax="scroll" data-image-src="<?php echo thumb($rootpath.'images/block-bg/news.jpg', 1000);?>">
	<div class="wrap">
		<div class="row">
            <h1>News</h1>
		</div>
	</div>
</div>
<div class="wrap small">
	<?php foreach ($newsItems as $slug => $item) { ?>
	<div class="row pad-top">
		<h2><a href="./?p=<?php echo $slug;?>"><?php echo $item['title'];?></a></h2>
		<?php echo explode('</p><p>', $item['content'])[0].'</p>';?>
		<p class="faint fontsize-tiny"><?php echo $item['date'];?></p>
	</div>
	<hr/>
	<?php } ?>
</div>
<?php } include "../includes/footer.php"; ?>
