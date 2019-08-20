<?php
	$info = array(""=>array
					("SN"=>"","Student name","Address","Phone")
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