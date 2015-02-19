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
	infinite: true,
	centerMode: true,
	centerPadding: '27.7%',
	autoplay: true,
	autoplaySpeed: 2000,
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
        <div class="five columns community">
	        <div class="row">
	        	<h3>Community item one</h3>
				<p id="1_summary">This is the summary</p>
				<div class="full">
					<p id="1_full">Lorem ipsum dolor sit amet, ante ac phasellus auctor lobortis risus, vestibulum erat amet morbi. Nonummy rhoncus, morbi neque ante sit. Mattis ipsum nam tortor at, ligula pellentesque nisl, nulla egestas massa urna at pellentesque porttitor, et fermentum, lorem nec consectetuer vel id. Neque curabitur morbi sed egestas lacus amet, neque nonummy in suspendisse ridiculus ante, libero magna gravida. Nam aliquet, fringilla proin nulla et scelerisque iaculis aliquet.</p>
				</div>			
            	<button name="1">Expand</button>
	        </div>
	        <hr>
			<div class="row">
				<h3>Community item two</h3>
				<p id="2_summary">This is the summary</p>
				<div class="full">
					<p id="2_full">Lorem ipsum dolor sit amet, ante ac phasellus auctor lobortis risus, vestibulum erat amet morbi. Nonummy rhoncus, morbi neque ante sit. Mattis ipsum nam tortor at, ligula pellentesque nisl, nulla egestas massa urna at pellentesque porttitor, et fermentum, lorem nec consectetuer vel id. Neque curabitur morbi sed egestas lacus amet, neque nonummy in suspendisse ridiculus ante, libero magna gravida. Nam aliquet, fringilla proin nulla et scelerisque iaculis aliquet.</p>
            	</div>
				<button name="2">Expand</button>
			</div>
			<hr>
			<div class="row">
				<h3>Community item three</h3>
				<p id="3_summary">This is the summary</p>
				<div class="full">
					<p id="3_full">Lorem ipsum dolor sit amet, ante ac phasellus auctor lobortis risus, vestibulum erat amet morbi. Nonummy rhoncus, morbi neque ante sit. Mattis ipsum nam tortor at, ligula pellentesque nisl, nulla egestas massa urna at pellentesque porttitor, et fermentum, lorem nec consectetuer vel id. Neque curabitur morbi sed egestas lacus amet, neque nonummy in suspendisse ridiculus ante, libero magna gravida. Nam aliquet, fringilla proin nulla et scelerisque iaculis aliquet.</p>
				</div>
				<button name="3">Expand</button>
			 </div>
			 <hr>
        </div>
		<div class="six columns">
			<div class="slider">
			<div><img src="../images/community/1.jpg"></div>
			<div><img src="../images/community/2.jpg"></div>
			<div><img src="../images/community/3.jpg"></div>
			<div><img src="../images/community/4.jpg"></div>
			</div>
		</div>
	</div>

<?php include "../includes/footer.php"; ?>
