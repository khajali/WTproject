<html>
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<form name="f1" action="" method="post">
<table width="100%">
<tr>
<td>
<h3>first name</h3>
</td>
<td>
<input type="text" name="un" size="30">
</td>
</tr>
<tr>
<td>
<h3>last name</h3>
</td>
<td>
<input type="text" name="ln" size="30">
</td>
</tr>
<tr>
<td>
<h3>gender</h3>
</td>
<td>
<h4><input type="radio" name="gender" value="male">male</h4>
<h4><input type="radio" name="gender" value="female">female</h4>
</td>
</tr>
<tr>
<td>
<h3>password</h3>
</td>
<td>
<input type="password" name="pwd" size="30"> 
</td>
</tr>
<tr>
<td align="center">
<input type="submit" name="submit">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
	$un=$_POST['un'];
	$ln=$_POST['ln'];
	$gender=$_POST['gender'];
	$pwd=$_POST['pwd'];
	$con=new mysqli("localhost","root",'',"khaja");
	$sql="insert into register(un,ln,gender,pwd) values('$un','$ln','$gender','$pwd')";
	$result=$con->query($sql);
 if($con->query($sql)===true)
	{
		echo "<h1>inserted</h1>";
	}
	else
	{
		echo "ERROR: ",$sql,"<br>",$con->error;
	}
	$con->close();
}
?>

</body>
</html>