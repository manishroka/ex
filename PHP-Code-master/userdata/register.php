<?php
	if(isset($_POST['register']))
	{
		$uname = $_POST['uname'];
		$password = $_POST['pwd'];
		$fullname = $_POST['fullname'];
		$imagepath = $_FILES['uploadFile']['name'];
		move_uploaded_file($_FILES['uploadFile']['tmp_name'], $imagepath);
		$con = mysqli_connect("localhost","root","") or die("Connection Error");
		mysqli_query($con, "create database if not exists user_db") or die("Create database error");
		mysqli_select_db($con, "user_db") or die("Database selection error");
		$create = "create table if not exists user(uname varchar(20) primary key, password varchar(255), fullname varchar(50), imagepath varchar(50))";
		mysqli_query($con, $create) or die("Table creation error");
		$insert = "insert into user values('$uname', '$password','$fullname','$imagepath')";
		mysqli_query($con, $insert) or die("Insertion Error");
		echo "You are registered successfully! <a href='login.php'>Go to login Page</a>";
		header("refresh:4,url=login.php");
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<style>
			input{
				display:block;
				
			}
		</style>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			User Name: <input type="text" name="uname" />
			Password: <input type="password" name="pwd" />
			Confirm Password: <input type="password" name="cpwd" />
			Full Name: <input type="text" name="fullname" />
			Upload Your Photo: <input type="file" name="uploadFile" accept = "image/png"/>
			<input type="submit" name="register" value="Register"/>
			
			
		</form>
	</body>
</html>
<?php
	}
?>