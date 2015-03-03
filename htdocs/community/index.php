<?php include "../includes/header.php";
//TODO : Will be pulled from database
$posts = array(
	//Title => Content
	"Lorem ipsum" => $lipsum->getSentence(9),
	"Dolor sit" => $lipsum->getSentence(9),
	"Amet consectetur" => $lipsum->getSentence(9)
);

?>
<script>
$(document).ready(function(){
    $("button.js-community-toggle").click(function(){
	 	$('.' + $(this).data('toggle-num') + '.full').slideToggle(300);

		if($(this).text() == 'View') {
        	$(this).text('Hide');
        } else {
	    	$(this).text('View');
        }
    });

    $('.community_slider').slick({
	centerMode: true,
	slidesToShow: 1,
 	});
});
</script>
<div class="block pad bg bg6 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Community</h1>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="row">
        <div class="five columns community border">
			<?php $i = 0; foreach ($posts as $title => $content) { $i++; ?>
	        <div class="row pad-bottom">
	        	<h3><?php echo $title;?></h3>
				<p>This is the summary
				<div class="<?php echo $i;?> full">
					<?php echo $content;?></p>
				</div>
            	<button class="js-community-toggle fontsize-small float-right small" data-toggle-num="<?php echo $i;?>">View</button>
	        </div>
			<?php } ?>
		</div>
		<div class="six columns">
			<div class="community_slider">
			<div><img src="../images/community/1.jpg"></div>
			<div><img src="../images/community/2.jpg"></div>
			<div><img src="../images/community/3.jpg"></div>
			<div><img src="../images/community/4.jpg"></div>
			</div>
		</div>
	</div>

<?php include "../includes/footer.php"; ?>
