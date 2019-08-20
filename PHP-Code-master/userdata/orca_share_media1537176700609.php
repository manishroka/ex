<html>
<head>
<title>db</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
name:<input type="text" name="name"/><br/>
pass:<input type="password" name="pass"/><br/>
profile:<input type="file" accept="image/jpeg" name="upload"/><br/>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
$filepath=$_FILES['upload']['name'];
move_uploaded_file($_FILES['upload']['tmp_name'],$filepath);
$con=mysqli_connect("localhost","root","","student") or die("connection error");
/*mysqli_query($con,"create database if not exists student") or die("creation error");
mysqli_select_db($con,"student") or die("selection error");
$table="create table info(
name varchar(20),
pass varchar(20),
profile varchar(100)
)";
mysqli_query($con,$table) or die("error in creation");
echo "succes";*/
$data="insert into info values ('$name','$pass','$filepath')";
mysqli_query($con,$data) or die("not inserted");
echo "success";
?>