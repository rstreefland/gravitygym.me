<?php

require(__DIR__ . '/../../includes/settings.php');

$file = $_GET['src'];
$width = $_GET['w'];
try {
    $img = new abeautifulsite\SimpleImage($filepath.$file);
    $img->fit_to_width($width);
    $img->output();
} catch(Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
