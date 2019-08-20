<?php
	
	$con = mysqli_connect("localhost","root","","form") or die("Connection faild ");

		

		mysqli_select_db($con,"form");

		$createTable = "CREATE TABLE student
		(
				fnmae varchar(80),
				Lname varchar(80),
				Email varchar(90),
				Mobile varchar(70),
				Gender varchar(50),
				Qualification varchar(17),
				Hobbies varchar(60)
			)";
		
		mysqli_query($con , $createTable) or die(" error");
	$sql = "ALTER TABLE student(
				ADD image varchar(50))";
		echo "Table created successfully";

?>