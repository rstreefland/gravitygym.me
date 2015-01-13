<?php include "../includes/header.php"; ?>
<div class="block hcontrast pad align-center">
	<div class="wrap">
		<div class="row">
			<h1 class="twelve columns fontsize-huge">Styleguide</h1>
		</div>
	</div>
</div>
<article class="wrap small">
	<section>
		<h2>Branding</h2>
		<h3>Site logo</h3>
		<p><img style="max-width: 300px;" src="<?php echo thumb($rootpath.'images/logo_wide_pink.png', 500)?>"></p>
		<h3>Favicon</h3>
		<p><img style="max-width: 50px;" src="<?php echo thumb($rootpath.'images/logo_icon_pink.png', 500)?>"></p>
	</section>
	<section>
		<h2>Colours</h2>
		<div class="row">
			<div class="feature-color colorbox three columns">
				<h3>Feature colour (from logo)</h3>
				<div class="auto-fill"></div>
			</div>
			<div class="body-bg colorbox three columns">
				<h3>Body background</h3>
				<div class="auto-fill"></div>
			</div>
			<div class="contrast-bg colorbox three columns">
				<h3>Contrast background</h3>
				<div class="auto-fill"></div>
			</div>
			<div class="hcontrast-bg colorbox three columns">
				<h3>High contrast background</h3>
				<div class="auto-fill"></div>
			</div>
		</div>
	</section>
	<section>
		<h2>Typography</h2>
		<h3>Headings - Raleway</h3>
		<p>Body - Source Sans Pro. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis libero at diam volutpat, ac placerat nisi euismod. Suspendisse vestibulum a nisl eget ultrices. Donec interdum quam vel lacinia faucibus. Sed quis arcu varius, elementum neque vitae, dictum urna. Ut et ante gravida, feugiat diam a, laoreet libero. Pellentesque eleifend purus sit amet nisl porta hendrerit. Sed metus est, gravida sed gravida a, sollicitudin a erat.</p>
		<h3>Font sizes</h3>
		<p class="fontsize-tiny"><code>fontsize-tiny</code> - 12px</p>
		<p class="fontsize-small"><code>fontsize-small</code> - 14px</p>
		<p class="fontsize-normal"><code>fontsize-normal</code> - 16px</p>
		<p class="fontsize-large"><code>fontsize-large</code> - 21px</p>
		<p class="fontsize-xlarge"><code>fontsize-xlarge</code> - 28px</p>
		<p class="fontsize-huge"><code>fontsize-huge</code> - 37px</p>
		<p class="fontsize-xhuge"><code>fontsize-xhuge</code> - 50px</p>
	</section>
	<section>
		<h2>Buttons</h2>
		<a class="button" href="#">Default button</a>
		<a class="button-primary" href="#">Primary button</a>
	</section>
	<section>
		<h2>Icons</h2>
		<div class="row"></div>
	</section>
	<section>
		<h2>Forms</h2>
		<div class="row"></div>
	</section>
</article>
<?php include "../includes/footer.php"; ?>
