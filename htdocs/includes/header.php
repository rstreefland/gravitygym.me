<?php
//Display all errors and warnings
error_reporting(-1);
ini_set('display_errors', 'On');

$rooturl = $_SERVER['HTTP_HOST'];
$filepath = $_SERVER['DOCUMENT_ROOT'];

//Assume production environment, tweak otherwise
$rootpath='/';
$stylesheet=$rootpath.'includes/style.php?p=style.scss';

//If running on local machine, use devmode settings (don't cache, use local rather than CDN files)
//Detect if running in production (gravitygym.me)
$devMode = ($_SERVER['HTTP_HOST'] != 'gravitygym.me');
if ($devMode) {
	$rootpath='/';
	$stylesheet=$rootpath.'includes/style.dev.php?p=style.scss&reset=1';
}

//Detect if running in staging environment (workshop.xes.io/gravitygym)
$stagingMode = (strpos($filepath,'workshop') !== false);
if ($stagingMode) {
	$devMode = false;
	$rootpath='/gravitygym/';
	$stylesheet=$rootpath.'includes/style.php?p=style.scss';
}

//Include external PHP libraries
require($filepath.$rootpath.'includes/scripts/parsedown/parsedown.php');

//Start caching
if (!$devMode) {
	$cache_time = 5; // Time in seconds to keep a page cached
	$cache_folder = $filepath.$rootpath.'includes/cache/'; // Folder to store cached files (no trailing slash)
	$cache_filename = $cache_folder.md5($_SERVER['REQUEST_URI']).'.html'; // Location to lookup or store cached file
	$cache_created  = (file_exists($cache_filename)) ? filemtime($cache_filename) : 0; //Check to see if this file has already been cached, if it has then get and store the file creation time

	if ((time() - $cache_created) < $cache_time) {
		readfile($cache_filename); // The cached copy is still valid, read it into the output buffer and exit
		die();
	}
}
ob_start(); //Start storing HTML rather than outputting directly, allows to replace title and description

//externalFile returns the local copy of a file, or the CDN copy if production
function externalFile($url, $file) {
	global $rootpath, $devMode;
	if ($devMode) {
		return $rootpath.'includes/external/'.$file;
	}
	else {
		return '//'.$url.$file;
	}
}

//thumb returns a compressed version of an image for faster page loading times
function thumb($src, $width) {
	global $rootpath;
	return $rootpath."images/thumb/&#63;w=$width&amp;src=$src";
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
		<script type="text/javascript" src="<?php echo externalFile('masonry.desandro.com/', 'masonry.pkgd.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('imagesloaded.desandro.com/', 'imagesloaded.pkgd.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo externalFile('cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/', 'lightbox.min.js');?>"></script>

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
						echo "<a class='button-primary' href='donate/'>Donate</a>";
						?>
					</div>
				</div>
			</nav>
		</header>
	<div id="content">
