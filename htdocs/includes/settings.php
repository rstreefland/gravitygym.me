<?php

//Display all errors and warnings
error_reporting(-1);
ini_set('display_errors', 'On');

$siteName = "GRAVITY";
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
require($filepath.$rootpath.'includes/db.php');

require($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/packages/autoload.php');

$cache = new xes\Cacher($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/cache/', !$devMode);
$cache->start();

$templater = new xes\Templater($_SERVER['DOCUMENT_ROOT'].$rootpath.'includes/templates/');
$lipsum = new xes\Lipsum();

?>
