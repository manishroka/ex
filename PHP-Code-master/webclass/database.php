<?php
	$con = mysqli_connect("localhost","root","","user_login") or die("connection Error");
	
	mysqli_select_db($con,"user_login");
	$createTable = "CREATE TABLE User
	(
		Id INT NOT NULL AUTO_INCREMENT,
		Email VARCHAR(100) NOT NULL,
		Password VARCHAR(100) NOT NULL,
		Hash VARCHAR(32) NOT NULL,
		active BOOL NOT NULL DEFAULT 0,
		reg_date TIMESTAMP,
		PRIMARY KEY (`id`)
	
	)";
	mysqli_query($con,$createTable) or die("Tablecreation Error");
	echo "Tablecreated successfully";
	
?>