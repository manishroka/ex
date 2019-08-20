<?php
$dob=mktime(0,0,0,11,2,1997);
echo "date of birth=".date('d/M/Y',$dob)."<br/>";
$present=time();
echo "recent date=".date('d/M/Y',$present)."<br/>";
echo "difference<br/>";
echo "second=".($present-$dob)."<br/>";
echo "min=".(($present-$dob)/60)."<br/>";
echo "hrs=".(($present-$dob)/3600)."<br/>";
echo "day=".floor((($present-$dob)/86400))."<br/>";
echo "month=".floor((($present-$dob)/2592000))."<br/>";
echo "year=".floor((($present-$dob)/31104000))."<br/>";
?>