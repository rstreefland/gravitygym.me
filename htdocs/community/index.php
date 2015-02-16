<?php include "../includes/header.php";?>
<script>
$(document).ready(function(){
	 $("#1_full").toggle(0);
	 $("#2_full").toggle(0);
	 $("#3_full").toggle(0);
	 
    $("button[name=1]").click(function(){
	    $("#1_full").toggle(300);
       
        if($(this).text() == 'Expand') {
        	$(this).text('Collapse');
        } else {
	        $(this).text('Expand');
        }
    });
    
    $("button[name=2]").click(function(){
	    $("#2_full").toggle(300);
       
        if($(this).text() == 'Expand') {
        	$(this).text('Collapse');
        } else {
	        $(this).text('Expand');
        }
    });
    
    $("button[name=3]").click(function(){
	    $("#3_full").toggle(300);
       
        if($(this).text() == 'Expand') {
        	$(this).text('Collapse');
        } else {
	        $(this).text('Expand');
        }
    });
    
    $('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerPadding: '60px',
  centerMode: true,
  variableWidth: true,
  adaptiveHeight: true
});
 
});
</script>
<div class="block pad bg bg1 align-center">
	<div class="wrap">
		<div class="row">
            <h1>Community</h1>
		</div>
	</div>
</div>
<div class="wrap">
	<div class="row">
        <div class="five columns community_item">
	        <div class="row">
	        	<h3>Community item one</h3>
				<p id="1_summary">This is the summary</p>
				<div class="full">
					<p id="1_full">This is the full text</p>
				</div>			
            	<button name="1">Expand</button>
	        </div>
			
			<div class="row">
				<h3>Community item two</h3>
				<p id="2_summary">This is the summary</p>
				<div class="full">
					<p id="2_full">This is the full text</p>
            	</div>
				<button name="2">Expand</button>
			</div>
			
			<div class="row">
				<h3>Community item three</h3>
				<p id="3_summary">This is the summary</p>
				<div class="full">
					<p id="3_full">This is the full text</p>
				</div>
				<button name="3">Expand</button>
			 </div>
        </div>
		<div class="six columns">
			<div class="slider">
			<div><img src="../images/classes/parallelbars.jpg"></div>
			<div><img src="../images/classes/rhythmicgymnastics.jpg"></div>
			<div><img src="../images/classes/trampoline.jpg"></div>
			</div>
		</div>
	</div>

<?php include "../includes/footer.php"; ?>
