<?php
session_start();
if(isset($_SESSION['uname']) && isset($_SESSION['password']))
{	
	echo "Welcome $_SESSION[uname]<br/>";	
?>
<html>
  <head>
  <title>Can View after login</title>
  </head>
<body>
	<h1>Trying Session Variable</h1>
</body>
</html>

<?php
}
else{
	echo "You cannot view this page without login!  go to <a href='day15_0.php'>login page</a> or we are redirecting you to login page in 6 secs";
	header("refresh:6,url=day15_0.php");

}
?>