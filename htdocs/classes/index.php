<?php include "../includes/header.php";

$template = $templater->loadModule('classesmodule.html');

$classes = array(
	array(
		'image' => thumb($rootpath.'images/classes/page/rhythmic.jpg', 300),
		'title' => 'Rhythmic',
		'content' => $lipsum->getSentence(9),
		'link' => 'freerunning'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/freerunning.jpg', 300),
		'title' => 'Freerunning',
		'content' => $lipsum->getSentence(9),
		'link' => 'parallelbars'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/parallelbars.jpg', 300),
		'title' => 'Parallel bars',
		'content' => $lipsum->getSentence(9),
		'link' => 'trampoline'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/trampoline.jpg', 300),
		'title' => 'Trampoline',
		'content' => $lipsum->getSentence(9),
		'link' => 'floor'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/floor.jpg', 300),
		'title' => 'Floor',
		'content' => $lipsum->getSentence(9),
		'link' => 'jumping'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/jumping.jpg', 300),
		'title' => 'Jumping',
		'content' => $lipsum->getSentence(9),
		'link' => 'children'
	),
	array(
		'image' => thumb($rootpath.'images/classes/page/children.jpg', 300),
		'title' => 'Children',
		'content' => $lipsum->getSentence(9),
		'link' => 'nul'
	),
);
?>
<div class="block pad bg bg7 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Classes</h1>
		</div>
	</div>
</div>

<div class="wrap classes">
	<?php foreach ($classes as $class) {
		$template->render($class);
	} ?>
</div>

<?php include "../includes/footer.php"; ?>
