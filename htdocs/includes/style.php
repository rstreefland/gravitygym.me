<?php
require('packages/autoload.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!$_GET['p']) {
    die("Stylesheet not selected. Set as '&p=' in URL.");
}

$src = "sass";
$server = new Leafo\ScssPhp\Server($src);

$server->serve();
?>
