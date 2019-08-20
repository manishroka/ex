<?php
		$con = mysqli_connect("localhost","root","","result_info") or die("connection Error");

		mysqli_select_db("$con,result_info")

		echo "connection success";
?>