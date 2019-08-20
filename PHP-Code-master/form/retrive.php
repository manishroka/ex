<?php
	$con = mysqli_connect("localhost","root","","form");
	$sql = "SELECT * FROM student";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<br/>";
		foreach ($row as $key=>$value) 
		{
			
			if($key == 'image')
				echo "<img src='$value' width='200'/> ";
			else
				echo "$value ";
		}
	}
	
?>