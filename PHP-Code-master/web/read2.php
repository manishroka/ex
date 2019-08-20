<?php
	file_put_contents("mas.txt","write and read content from file");
	$fp=fopen("mas.txt","r+");
	//echo ftell($fp);
	fseek($fp,+9);
	fscanf($fp,"%s",$word);
	echo $word;
?>