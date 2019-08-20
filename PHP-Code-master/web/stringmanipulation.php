<?php
	$space="    It  trim the space on first chatacter nd last";
	echo trim($space)."<br/>";
	$a="Count";
	echo strlen($a)."<br/>";
	echo strcasecmp($space,$a)."<br/>";//to check equal
	echo strtoupper("hello upper")."<br/>";
	echo strtolower("HELLO LOWER")."<br/>";
	echo ucwords("all front lower character are converted to uppercase")."<br/>";
	echo strstr($space,"space")."<br/>";
	echo substr($space,9)."<br/>";
	echo strpos($space,"t")."<br/>";
	echo str_replace($a,"Dont count",$a);
?>
