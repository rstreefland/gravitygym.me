</div>
<footer class="block">
	<div class="wrap">
		<div class="row fontsize-small">
			<nav class="six columns">
					<?php foreach ($navItems as $name => $link) {
						$url = $rootpath.$link;
					?>
					<p><a href="<?php echo $url;?>"><?php echo $name;?></a></p>
					<?php } ?>
			</nav>
			<div class="six columns align-right">
				<p>&copy; HCI Group One, <?php echo (date("Y") == '2014' ? '2014' : '2014 - '.date("Y")); ?>. All rights reserved.</p>
				<p class="fontsize-tiny">B. Clements, D. Hughes, R. Streefland and G. Bryant</p>
				<p class="fontsize-tiny">Images used under education copyright exception</p>
			</div>
		</div>
	</div>
</footer>

<!-- Developer-defined Javascript & jQuery -->
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
	ga('create','UA-41203843-2','auto');ga('send','pageview');
</script>
<?php } ?>
</body>
</html>
<?php

$pageTitle = (isSet($pageTitle) ? ' | '.$pageTitle : NULL);

$cache->setReplacements(array(
	'<!--TITLE-->' => $siteName.$pageTitle,
	'<!--IMAGE-->' => $pageImage,
	'<!--DESCRIPTION-->' => $pageDescription,
	'<!--CACHE-->' => '<!-- Cached file - built at ' . date('H:i:s', time()) . ' -->'
));

$cache->finish();
?>
