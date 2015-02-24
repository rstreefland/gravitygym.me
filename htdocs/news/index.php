<?php include "../includes/header.php";
if (isSet($_GET['p'])) {
	$template = $templater->loadModule('newsitem.html');
	$template->render(array(
		"image" => $rootpath."images/uploads/demo.jpg",
		"title" => "Fun run",
		"date" => "3rd February 2014",
		"content" => str_replace("\n", "</p><p>", "Content shamelessly stolen from http://www.readingroadrunners.org/mortimer.html
        
        The annual Mortimer 10km run will take place on Sunday 28th September 2014 and runs in conjunction with an 8km charity walk and a 3km run which is popular with younger runners. 

The course is undulating through the country lanes of Mortimer and starts and finishes on the Mortimer Fairground, RG7 3SW. Thre will be medals for all finishers.  Prizes for the 10km are for the first man and lady and first age category winners. Full details available here 

Around the start/finish area you will find refreshments and stalls.  The Fairground itself has its own play area so it is an ideal setting for a family day out. 

Events start at 10:15am

Entries are open and the closing date for postal entries will be 15th September 2014. Entries on the day will be accepted subject to race limit not being reached. We will be using online entry again this year, please, click on the link below to enter online. (when available).

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat."),
		"URL" => 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
	));
} else {
?>
<div class="wrap align-center">
	<a href="./?p=1">News item</a>
</div>
<?php } include "../includes/footer.php"; ?>
