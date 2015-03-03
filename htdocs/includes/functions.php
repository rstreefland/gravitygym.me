<?php

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

function queryToArray($query, $fieldName = null) {
	$result = array();
	while ($row = $query->fetch_assoc()) {
		if ($fieldName != null) {
			$result[] = $row[$fieldName];
		}
		else {
			$result[] = $row;
		}
	}
	return $result;
}

?>
