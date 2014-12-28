<?php
require "lib/scss.inc.php";

$src = "sass";
$cache = $src.'/scss_cache/production';

$scss = new scssc();
$scss->setFormatter("scss_formatter_compressed");

$server = new scss_server($src, $cache, $scss);
$server->serve();
?>