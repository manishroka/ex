<center><?php
	$info=array(
			"model"=>array("Hundai"=>120,"Maruti"=>600),
			"color"=>array("Dark"=>"Red","light"=>"red"),
			"Price"=>array("expensive"=>4000,"cheap"=>200)
	);
	foreach($info as $key=> $infoo)
	
	{
		echo "<h1 style='border-style:solid;display:inline-block;'>$key</h1><ol>";
		foreach($infoo as $key=> $value)
		echo "<li> $key $value<br/></li>";
		echo "</ol>";
	}
	
?></center>