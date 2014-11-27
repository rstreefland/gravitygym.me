</div>
<footer class="block">
	<div class="wrap">
		<ul class="social"><?php
			$social = array(
				//'link' => 'font-awesome icon name'
			);

			foreach ($social as $link => $fa) {
				echo "\n\t\t<li><a class='nohover' href='$link'><i class='fa $fa'></i></a></li>";
			}
		?></ul>
		<h2>Copyright</h2>
		<h2>Navigation</h2>
		<h2>Site by HCI group one (Beth Clements, <a href="https://xes.io">Dan Hughes</a>, Rhys Streefland, George Bryant)</h2>
	</div>
</footer>

<!-- Developer-defined javascript & jQuery -->
<script src="<?php echo $rootpath;?>includes/scripts.js"></script>

<?php if ($devMode) {?>
<!-- If developer mode, insert LiveReload script http://livereload.com/ -->
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>
<?php } else { ?>
<!-- Otherwise, add Google Analytics (commented out as project won't go into production) -->
<script>
	(function(x,e,s,d,a,n){x.GoogleAnalyticsObject=d;x[d]||(x[d]=
	function(){(x[d].q=x[d].q||[]).push(arguments)});x[d].d=+new Date;
	a=e.createElement(s);n=e.getElementsByTagName(s)[0];
	a.src='//www.google-analytics.com/analytics.js';
	n.parentNode.insertBefore(a,n)}(window,document,'script','ga'));
	//ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php } ?>
</body> 
</html>
<?php

//Replace variables into the HTML, cache the page if devMode, then output the final HTML to screen
$output = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer
if (isset($pageTitle)) {
	$pageTitle = ' | ' . $pageTitle;
}
else {
	$pageTitle = NULL;
}
// Replace <!--VARS--> with $pageVars contents
$output = str_replace('<!--TITLE-->', "GRAVITY" . $pageTitle, $output);
$output = str_replace('<!--IMAGE-->', $pageImage, $output);
$output = str_replace('<!--DESCRIPTION-->', $pageDescription, $output);
$output = str_replace('<!--CACHE-->', '<!-- Cached file - built at ' . date('H:i:s', time()) . ' -->', $output);

if (!$devMode) { file_put_contents($cache_filename, $output); }

//output everything
echo $output; ?>