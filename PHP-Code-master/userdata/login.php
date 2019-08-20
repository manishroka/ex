<?php
	if(isset($_POST['login']))
	{
		$uname = $_POST['uname'];
		$password = $_POST['pwd'];
		$con = mysqli_connect("localhost","root","","user_login") or die("Connection Error");
		$select = "select * from user where Email = '$uname' and password = '$password'";
		$result = mysqli_query($con, $select) or die("Selection Error");
		if(mysqli_num_rows($result) == 1)
		{			
			$row = mysqli_fetch_assoc($result);
			setcookie('Email',$row['Email'],time()+86400);
			setcookie('Password',$row['Password'],time()+86400);
			
			echo "Username: $row[Email]<br/>Profile Pic<br/><img src='".$row['imagepath']."' width='200'/>";
		}
		else{
			echo "Your credentials is incorrect try <a href='login.php'>login again</a>";
			header("refresh:4, url=login.php");
			
		}
		
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
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
			<input type="submit" name="login" value="Login"/>			
		</form>
	</body>
</html>
<?php
	}
?>