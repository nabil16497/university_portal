<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		td{
			padding: 15px;
		}
		input{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<?php include('header2.php');?>

	<div style="border:3px solid #000000;border-radius: 10px; margin-top: 10px;margin-bottom: 10px;padding: auto;">

		<div style="background-color: #e5e5e5; margin-top: 30px; margin-bottom: 30px;margin-left: auto; margin-right: auto; width: 450px ;font-size:  30px; padding: 20px; border-radius: 10px;">
			
			<form action="home.php" method="post">
			<table align="center">
				<tr>
					<th colspan="2"><h4>Login <br><span style="opacity: .5">(Admin)</span></h2></th>
				</tr>
				<tr>
					<td>username:</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>password:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td align="right" colspan="2"><input type="submit" name="login" value="Login" style="padding: 10px;font-size: 25px;"></td>
				</tr>
			</table>
		</form>
		<a href=""><input type="submit" value="Back" style="padding: 5px;font-size: 20px; margin-left: 200px;" ></a>
		</div>

	</div>

	<?php include('footer.php');?>
</body>
</html>