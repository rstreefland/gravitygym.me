<?php include "../includes/header.php"; ?>

<div class="block pad bg bg2 align-center">
	<div class="wrap">
		<div class="row">
            <h1>About Us</h1>
		</div>
	</div>
</div>

<div class="wrap">
	<div class="row">
        <div class="seven columns">
            <h2>What Is Gravity Gym?</h2>
            <p>Gravity Gym is our home away from home, and we want it to be yours too. We strive to make learning about Gymnastics everyone's favourite pass-time through our wide range of courses taught by our professional instructors. Members can also use the gym whenevery they want to practice what they have learnt.</p>
        </div>
		<div class="five columns">
			<img src="../images/about/gymnasticClub.jpg" alt="Gravity gym building">
		</div>
	</div>
    <div class = "row">
        <h2>Meet the Team</h2>
    </div>
    <div class = "row">
        <div class="two columns">
            <img class="circle" src="../images/people/dan.jpg" alt="Profile picture">
        </div>
        <div class="ten columns">
            <p class = "pad-top">
                This is Dan, he doesn't actually work for the gym, but he's here anyway for being such a nifty guy!
				<?php echo $lipsum->getSentence(5);?>
            </p>
        </div>
    </div>
    <div class = "row">
        <div class="ten columns">
            <p class = "pad-top">
                This is George, he doesn't actually work for the gym, but he's here anyway for being such a swell guy!
				<?php echo $lipsum->getSentence(5);?>
            </p>
        </div>
        <div class="two columns">
            <img class="circle" src="../images/people/george.jpg" alt="Profile picture">
        </div>
    </div>
    <div class = "row">
        <div class="two columns">
            <img class="circle" src="../images/people/beth.jpg" alt="Profile picture">
        </div>
        <div class="ten columns">
            <p class = "pad-top">
                This is Beth, she doesn't actually work for the gym, but she's here anyway for being such a stand-up gal!
				<?php echo $lipsum->getSentence(5);?>
            </p>
        </div>
    </div>
    <div class = "row">
        <div class="ten columns">
            <p class = "pad-top">
                This is Rhys, he doesn't actually work for the gym, but he's here anyway for being such an awesome guy!
				<?php echo $lipsum->getSentence(5);?>
            </p>
        </div>
        <div class="two columns">
            <img class="circle" src="../images/people/rhys.jpg" alt="Profile picture">
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
