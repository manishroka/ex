<html>
<head>
<title>calender</title>
</head>
<body>
<form action="" method="get">
year:<input type="number" name="year"/><br/>
month:<input type="number" name="month"/><br/>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
$year=$_GET['year'];
$month=$_GET['month'];
$firstday=mktime(0,0,0,$month,1,$year);
$nameofmonth=date('F',$firstday);
echo $daysofweek;
$nameofweek=date('D',$firstday);
switch($nameofweek)
{
	case "Sun":$blank=0;break;
	case "Mon":$blank=1;break;
	case "Tue":$blank=2;break;
	case "Wed":$blank=3;break;
	case "Thu":$blank=4;break;
	case "Fri":$blank=5;break;
	case "Sat":$blank=6;break;
}
$daysinmonth=cal_days_in_month(0,$month,$year);
echo "<table border='1' cellspacing='0'>";
echo "$year $month";
echo "<tr>
<td>sun</td>
<td>mon</td>
<td>tue</td>
<td>wed</td>
<td>thu</td>
<td>fri</td>
<td>sat</td>
</tr>";
echo"<tr>";
$daycount=1;
while($blank>0)
{
	echo"<td>&nbsp</td>";
	$blank=$blank-1;
	$daycount=$daycount+1;
}
$day=1;
while($day<=$daysinmonth)
{
	if($daycount==7)
		echo"<td bgcolor='red'>$day</td>";
	else
		echo"<td>$day</td>";
	$day++;
	$daycount++;
	if($daycount>7)
	{
		echo"</tr><tr>";
		$daycount=1;
	}
}
while($daycount>1&&$daycount<=7)
{
	echo"<td></td>";
	$daycount++;
}
echo "</tr></table>";
?>