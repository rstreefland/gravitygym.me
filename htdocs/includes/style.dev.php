<?php
require "lib/scss.inc.php";

$src = "sass";
$cache = $src.'/scss_cache/dev';

$scss = new scssc();
$scss->setFormatter("scss_formatter");

$server = new scss_server($src, $cache, $scss);
$server->serve();
?>