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

<div class="wrap pad-top">
	<div class="row margin-bottom">
		<div class="six columns">
			<?php foreach ($newsItems as $slug => $item) { ?>
			<h2 class="no-margin"><a href="./?p=<?php echo $slug;?>"><?php echo $item['title'];?></a></h2>
			<?php echo explode('</p><p>', $item['content'])[0].'</p>';?>
			<p class="faint fontsize-tiny"><?php echo $item['date'];?></p>
			<hr/>
			<?php } ?>
		</div>
		<div class="six columns">
			<div class="block pad-small">
				<h2>Latest from Facebook</h2>
				<p class="fontsize-small">We're making great progress. Come donate! <i class="fa fa-thumbs-o-up"></i>3</p>
				<p class="fontsize-small"><?php echo $lipsum->getSentence(2);?> <i class="fa fa-thumbs-o-up"></i>2</p>
			</div>
			<br/>
			<div class="block pad-small">
				<h2>Latest from Twitter</h2>
				<?php $i = 4; while ($i--) { ?>
				<p class="fontsize-small"><?php echo $lipsum->getSentence();?> <i class="fa fa-retweet"></i>2</p>
				<?php } ?>
			</div>
		</div>
	</div>
</div>


<div class="wrap small">
</div>
<?php } include "../includes/footer.php"; ?>
