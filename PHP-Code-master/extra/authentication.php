  <style>
body
{
   background-color:grey;
}
  
  table
  {
  	font-weight: strong;
  	font-size: 20px;
  	font-family: verdana;
  	background-color: lightgreen;
  }
  h3
  {
  	font-color: black;
  }
</style>
<?php
session_start();
	$con = mysqli_connect("localhost","root","","bim4thb") or die("Error in connection");
	$uname = $_POST['txtuname'];
	$password = $_POST['pwd'];

	$select = "select * from classwork where uname = '$uname' and password = '$password'";
	$result = mysqli_query($con, $select) or die(file_put_contents("log.txt","Select query error"));
	 
	 echo "<center>";
 echo "<table border='5'>";
 echo "<tr>";

	if(mysqli_num_rows($result) != 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$_SESSION['uname'] = $row['uname'];
			$_SESSION['password'] = $row['password'];
			echo "<script>alert('Welcome $row[fname]')</script>"."<br/>";
			 $databasephoto =$row['photo'];
		
   $ball = "apple.png";

			
					echo "<td><center><b></b>"."<img src='$databasephoto' width='180' height='200'>"."</td><tr></center>"; 

  echo "<td><b> Name:- </b>".$row['fname']."<td/><tr>";
  echo "<td> <b>Email Address:- </b> ".$row['email']."<td/><tr>";
  echo  "<td><b> Phone Number:- </b> ".$row['phone']."<td/><tr>";
  echo  "<td><b> Phone Number:- </b> ".$row['address']."<td/><tr>";
  echo "<td> <b>Gender:- </b> ".$row['gender']."<td/><tr>";

  echo  "<td><b> Academic:- </b> ".$row['academic']."<td/><tr>";
 
				
			echo "<h3><a href='edit.php'>Edit My Details</a></h3>";
		}
	}
	
	else{
		echo "<h1>Username or password doesnot match!"."<br/><hr>";
                      echo "<script>alert('Redrecting...')</script>";
		header("refresh:'Redricting', url=day15_0.php");
	}

?> 
<h1><a href='day15_0.php'>Go Back</a></h1>