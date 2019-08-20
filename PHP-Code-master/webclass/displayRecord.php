<?php
	include "connection.php";
	$select = "select * from student";
	$result = mysqli_query($con,$select);
	$fp = fopen("student.csv","w");
	while($row = mysqli_fetch_assoc($result))
	{
		fputcsv($fp,$row);
		foreach($row as $value)
			echo "$value ";
			echo"<div style="border=2"></div>"
		echo "<hr/>";
	}
	fclose($fp);
?>