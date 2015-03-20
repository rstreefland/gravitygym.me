<?php

//Display all errors and warnings
error_reporting(-1);
ini_set('display_errors', 'On');

$siteName = "GRAVITY";
$rooturl = $_SERVER['HTTP_HOST'];
$filepath = $_SERVER['DOCUMENT_ROOT'];
$stylesheetDev = false;

//Assume production environment, tweak otherwise
$rootpath='/';

//If running on local machine, use devmode settings (don't cache, use local rather than CDN files)
//Detect if running in production (gravitygym.me)
$devMode = ($_SERVER['HTTP_HOST'] != 'gravitygym.me');
if ($devMode) {
	$rootpath='/';
	$stylesheetDev='&dev=1';
}

//Detect if running in staging environment (workshop.xes.io/gravitygym)
$stagingMode = (strpos($filepath,'workshop') !== false);
if ($stagingMode) {
	$devMode = false;
	$rootpath='/gravitygym/';
}

$stylesheet=$rootpath.'includes/style.php?p=style.scss'.$stylesheetDev;
require($filepath.$rootpath.'includes/packages/autoload.php');
?>
