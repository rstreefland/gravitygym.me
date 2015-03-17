<?php include "../includes/header.php";

$events = array(
    'floor-show' => array(
        'title' => 'Floor Show',
        'date' => date('jS F Y', time() + 86400),
        'content' => "Gravity Gym is proud to present our first annual floor show, dedicated to showcasing our most talented floor gymnasts! All of these
            wonderful girls and boys will be showing all who attend the most groundbreaking floor routines that they have created themselves
            with the help of our friendly and dedicated staff. We look forward to seeing you there!"
    ),
    'another-event' => array(
        'title' => 'Another event',
        'date' => date('jS F Y', time() + 864000),
        'content' => $lipsum->getSentence(5)
    )
);

$pastevents = array(
    'fun-run' => array(
        'title' => 'Fun run',
        'date' => '2nd January 2015',
        'content' => 'The fun run was a big success, with over 100 people taking part, we managed to raise almost £500 for the club! Thank you very much to all those who participated and all those who helped organise the run.'
    )
);

if (isSet($_GET['event'])) {
	$settings = $events[$_GET['event']];
	$settings['URL'] = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$template = $templater->loadModule('eventsitem.html');
	$template->render($settings);
} elseif (isSet($_GET['pastevent'])) {
    	$settings = $pastevents[$_GET['pastevent']];
    	$settings['URL'] = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    	$template = $templater->loadModule('eventsitem.html');
    	$template->render($settings);
    } else {


?>
<div class="block pad bg bg8 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Events</h1>
		</div>
	</div>
</div>
<div class="wrap">
    <div class="row">
        <div class="six columns">
            <h2>Upcoming events</h2>
            <?php foreach ($events as $slug => $event) { ?>
            <div>
                <h3><a href="./?event=<?php echo $slug?>"><?php echo $event['date'];?> - <?php echo $event['title'];?></a></h3>
                <?php echo $event['content'];?>
            </div>
            <?php } ?>
        </div>
        <div class="six columns">
            <h2>Past events</h2>
            <?php foreach ($pastevents as $slug => $event) { ?>
            <div>
                <h3><a href="./?pastevent=<?php echo $slug?>"><?php echo $event['date'];?> - <?php echo $event['title'];?></a></h3>
                <?php echo $event['content'];?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } include "../includes/footer.php";?>
