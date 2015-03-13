<?php include "../includes/header.php";

$events = array(
    'an-event' => array(
        'title' => 'An event',
        'date' => date('jS F Y', time() + 86400),
        'description' => $lipsum->getSentence(2)
    ),
    'another-event' => array(
        'title' => 'Another event',
        'date' => date('jS F Y', time() + 864000),
        'description' => $lipsum->getSentence(2)
    )
);

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
                <h3><?php echo $event['date'];?> - <?php echo $event['title'];?></h3>
                <?php echo $event['description'];?>
            </div>
            <?php } ?>
        </div>
        <div class="six columns">
            <h2>Past events</h2>
            <div>
                <h3>2nd January 2015 - Fun run</h3>
                <?php echo $lipsum->getSentence(3);?>
            </div>
        </div>
    </div>
</div>
<?php include "../includes/footer.php";?>
