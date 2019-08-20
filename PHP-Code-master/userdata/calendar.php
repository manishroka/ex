<?php
	$year = $_GET['year'];
	$month = $_GET['month'];
	$calDate = mktime(0,0,0,$month,1,$year);
	$totalDays = date("t",$calDate);
	$weekStart = date('w',$calDate);
	echo $weekStart."<br/>";
	for($i=1;$i<=$totalDays;$i++)
	{
		echo "$i ";
		if($i%7==0)
			echo "<br/>";
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Calendar from PHP</title>
	</head>
	<body>
		<form action="" method="get">
			Year:<select name='year'>
	<?php
				for($i=1970;$i<2021;$i++)
				echo "<option value='".$i."'>$i</option>";
	?>
		</select>
		Month:<select name="month">
				<?php
				for($i=1; $i<13; $i++)
				echo "<option value='".$i."'>$i</option>";
				?>
		</select>	
		<input type="submit" name="submit" value="View Calendar"/>
		</form>
	</body>
</html>