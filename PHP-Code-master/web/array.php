<?php
	$info=array(
			"model"=>array("Hundai"=>"i20","Maruti"=>600),
			"color"=>array("Dark"=>"Red","light"=>"red"),
			"Price"=>array("expensive"=>4000,"cheap"=>200)
	);
	echo "<table style='border-collapse:collapse;'>";
	foreach($info as $arrkey => $arr)
	{
		echo "<tr><th>$arrkey</th>";
		foreach($arr as $key => $value)
		{
			echo "<td style='border-style:solid;'>$key =>$value</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>