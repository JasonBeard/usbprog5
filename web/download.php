<?php
	$name=$_GET['name'];
	$path=$_GET['path'];
	if($path=='tmp'){
	$pfad = "/var/www/tmp/".$name;
	}
	else{
	$pfad = "/var/www/save/".$name;
	}
	header("Content-Type: application/force-download");
	header("Content-Disposition: attachment; filename=\"". $name ."\"");
	header("Content-Length: ". filesize($pfad));
	header("Content-Transfer-Encoding: binary");
	readfile($pfad);
?>
