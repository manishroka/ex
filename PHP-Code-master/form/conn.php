<?php
	$con=mysqli_connect("localhost","root","","form") or die("Connection error");

	mysqli_query($con,"create database if not exists User_login") or die("Database creation error");


?>