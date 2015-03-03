<?php

require('settings.php');
require('db.php');
require('functions.php');

$cache = new xes\Cacher($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/cache/', !$devMode);
$cache->start();

$templater = new xes\Templater($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/templates/');

$lipsum = new xes\Lipsum();

function generateCode() {
    return strToUpper(substr(md5(rand()), -8));
}

$navItems = array(
	"About" => "about/",
	"Gallery" => "gallery/",
	"News" => "news/",
	"Events" => "events/",
	"Community" => "community/",
	"Contact" => "contact/"
);

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Page built at <?php echo date('Y-m-d H:i:s'); ?> -->

		<!-- Meta -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="UoR HCI and Applications Group 1 (Beth Clements, Dan Hughes, George Bryant, Rhys Streefland)">
		<meta name="description" content="<!--DESCRIPTION-->">

		<!-- Javascript -->
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/', 'jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/', 'modernizr.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.6/', 'slick.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/', 'masonry.pkgd.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/', 'imagesloaded.pkgd.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/', 'lightbox.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo $rootpath;?>includes/scripts/parallax.min.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/', 'normalize.min.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.6/', 'slick.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/', 'lightbox.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/', 'font-awesome/4.2.0/css/font-awesome.min.css');?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $stylesheet;?>"/>

		<!-- Icons -->
		<link rel="icon" type="image/png" href="<?php echo $rootpath;?>images/favicon.png" />
		<link rel="apple-touch-icon" href="<?php echo $rootpath;?>images/favicon.jpg" />

		<!-- Opengraph social media integration -->
		<meta property="og:image" content="<!--IMAGE-->"<?php $pageImage = "http://".$rooturl.$rootpath."images/logo.jpg";?>>
		<meta property="og:title" content="<!--TITLE-->">
		<meta property="og:description" content="<!--DESCRIPTION-->"<?php $pageDescription = 'Gravity Gym lorem ipsum dolor sit amet.';?>>
		<meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>"/>

		<?php if ($devMode) { ?>
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<?php } ?>

		<title><!--TITLE--></title>
	</head>
	<body>
		<!--[if IE]><p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
		<header>
			<nav class="wrap">
				<div class="row">
					<a class="four columns logo" href="<?php echo $rootpath;?>">
						<img src="<?php echo $rootpath;?>images/logo_wide_pink.png">
					</a>
					<div class="eight columns navigation align-right">
						<?php foreach ($navItems as $name => $link) {
							$url = $rootpath.$link;
							echo "<a href='$url'>$name</a>";
						}
						$url = $rootpath.'donate/';
						echo "<a class='button-primary' href='$url'>Donate</a>";
						?>
					</div>
				</div>
			</nav>
		</header>
	<div id="content">
