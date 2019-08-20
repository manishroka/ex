<?php
	/*$con=mysqli_connect("localhost","root","","student")or die("connection error");
    mysqli_select_db($con,"student")or die("erroe");
	$table="create table res (
        Batch varchar(5),
        Semester varchar(5),
		RN varchar(10),
		Name varchar(30),
		GPA_pom varchar(10),
		Grade_pom varchar(10),
		GPA_BusinessCommunication varchar(10),
		Grade_BusinessCommunication varchar(10),
		GPA_bMath varchar(10),
		Grade_bMath varchar(10),
		GPA_cis varchar(10),
		Grade_cis varchar(10),
		GPA_Dl  varchar(10),
		Grade_Dl varchar(10),
		SGPA varchar(10),
		Grade varchar(10),
		Remarks varchar(20)
		)";
		mysqli_query($con,$table) or die("error");
	echo "sucess";
	*/
	$con=mysqli_connect("localhost","root","","student") or die("connection error");
if(isset($_POST["upload"]))
{
   $uploadfile=$_FILES["file"]["tmp_name"];
	$newfile=fopen($uploadfile,"r");
while(($column=fgetcsv($newfile,10000,","))!=+FALSE)
{
    $data="INSERT into res
	values('".$column[0]."',
	'".$column[1]."',
	'".$column[2]."',
	'".$column[3]."',
	'".$column[4]."',
	'".$column[5]."',
	'".$column[6]."',
	'".$column[7]."',
	'".$column[8]."',
	'".$column[9]."',
	'".$column[10]."',
	'".$column[11]."',
	'".$column[12]."',
	'".$column[13]."',
	'".$column[14]."'
)";
	mysqli_query($con,$data)  or die("not inserted");
	echo "insert success";
	}
}	else{
	?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
upload file:<input type="file" name="file" accept="text/csv"/>
<input type="submit" name="upload" value="upload"/>
</form>
</body>
</html>
<?php
}
?>