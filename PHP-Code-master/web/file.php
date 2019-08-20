<?php
	// syntax as C program
	$a=fopen("student.csv",'r');
	echo fread($a,10000);
	//echo fscanf($a,"%D",$a);
	
?>