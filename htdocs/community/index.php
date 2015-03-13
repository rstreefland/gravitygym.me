<?php include "../includes/header.php";
//TODO : Will be pulled from database
$posts = array(
	//Title => Content
	array(
		"title" => "Recycling",
		"subtitle" => "Send Us Your Pics!",
		"content" => "We here at Gravity Gym believe that global warming is a very serious issue,
		so we have started a recycling program! Send us your pictures of nice full recycling boxes
		outside of your house, and we'll give you a discount on your next visit to the club!"
	),
	array(
		"title" => "Dolor sit",
		"subtitle" => "Lorem",
		"content" => $lipsum->getSentence(9)
	),
	array(
		"title" => "Amet consectetur",
		"subtitle" => "Dolor",
		"content" => $lipsum->getSentence(9)
	)
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
	infinite: true,
	centerMode: true,
	speed: 300,
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
	<div class="row pad-bottom">
        <div class="five columns community border">
			<?php $i = 0; foreach ($posts as $post) { $i++; ?>
	        <div class="row pad-bottom">
	        	<h3><?php echo $post['title'];?></h3>
				<p><?php echo $post['subtitle'];?></p>
				<p> <div class="<?php echo $i;?> full">
					<?php echo $post['content'];?></p>
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
