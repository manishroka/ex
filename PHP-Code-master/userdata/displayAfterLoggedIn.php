<?php
	if(isset($_COOKIE['uname']) and isset($_COOKIE['password']))
	{
		echo "Welcome $_COOKIE[uname],<br/>";
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
		<h1>You see this because you have logged in in our system</h1>
	</body>
</html>
<?php
	}
	else{
		
		echo "You should <a href='login.php'>login</a> first to view this page";
		header("refresh:4,url=login.php");
	}
?>