<?php	
$con=mysqli_connect("localhost","root","","form") or die("Connection error");
	$filepath = $_FILES['upload']['name'];
	$fname=$_POST['fnme'];
	$Lname=$_POST['lnme'];
	$Email=$_POST['em'];
	$Mobile=$_POST['num'];
	$Gender=$_POST['radgender'];
	$Qualification=$_POST['sel'];
	$Hobbies=$_POST['chkbox'];
	move_uploaded_file($_FILES['upload']['tmp_name'],$filepath);
	$insert="insert into student values('$fname','$Lname','$Email','$Mobile','$Gender','$Qualification','$Hobbies','$filepath')";

	mysqli_query($con,$insert) or die("Error");
	echo "success";
?>