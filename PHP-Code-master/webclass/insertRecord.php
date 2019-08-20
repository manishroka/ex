<?php
	include "connection.php";
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$lname=$_GET['lname'];
	$email = $_GET['email'];
	$mobile = $_GET['mobile'];
	$gender = $_GET['gender'];
	$qualification = $_GET['qualification'];
	$hobbies = $_GET['hobbies'];
	$insert = "insert into student values('$fname','$mname','$lname','$email','$mobile','$gender','$qualification','$hobbies')";
	mysqli_query($con,$insert) or die();
	echo "Record Inserted Successfully";
?>