<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
		
	</style>
</head>
<body>

<form action="welcome.php" method="post">
	<fieldset >
	
	<img src="uploads/picture.jpg" alt="ABC UNIVERSITY" class="center" width="350" height="345">
	<table align="center">
		<tr>
			<th colspan="2"><h2><h4>Signin with your account</h4></h2></th>
		</tr>
		<tr>
			<td>User Id</td>
			<td><input type="text" name="uname" style="width:160px;
            height:20px;" ></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" style="background-color:#00FF00;color:white;width:100px;
            height:30px; "value="login"></td>
		</tr>
	</table>
	</fieldset>
	
</form>

</body>
</html>