<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

	echo "<script>location.href='loginAdmin.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		td{
			padding: 15px;
		}
	</style>
</head>
<body>


<?php include('header1.php');?>

<div style="border:3px solid #000000;border-radius: 10px; margin-top: 10px;margin-bottom: 10px;padding: auto;">
	<span style="text-align: center;color: #e80000"><h1>Student Registration</h1></span>
	<div style="margin: auto; font-size: 15px;padding: 10px;">
		<form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
			<table style="padding: 10px;">
				

				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input type="text" name="firstname"style="font-size: 15px;">
					</td>
					<td rowspan="11">

					<img src= "userdp.png" alt="Profile Picture" style="max-height: 200px ; margin-bottom: 10px;"><br>
  					<input type="file" name="file">
  					<span style="color: #ff0000">
					</td>

				</tr>

				<tr>
					<td>
						Last Name:
					</td>
					<td>
						<input type="text" name="lastname"style="font-size: 15px;">
					</td>
					
				</tr>

				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input type="Date" name="dob"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Gender:
					</td>
					<td>
						<input type="radio" name="gender" value=1> Male
						<input type="radio" name="gender" value=2> Female 
					</td>
				</tr>

				<tr>
					<td>
						Contact:
					</td>
					<td>
						<input type="text" name="contact"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="text" name="email"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Nationality:
					</td>
					<td>
						<select name="nationality"style="font-size: 15px;">
						<option value=""></option>	
						<option value="Bangladesh">Bangladesh</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>
						Address:
					</td>
					<td>
						<textarea name="address" rows="6" cols="50" placeholder="Please Write Your Address Here-"></textarea>
					</td>
				</tr>

				<tr>
					<td>
						Blood Group:
					</td>
					<td>
						<select name="blood"style="font-size: 15px;">
						<option value=""></option>	
						<option value="A+ve">A+ve</option>
						<option value="A+ve">B+ve</option>
						<option value="A+ve">AB+ve</option>
						<option value="A+ve">O+ve</option>
						<option value="A+ve">A-ve</option>
						<option value="A+ve">B-ve</option>
						<option value="A+ve">AB-ve</option>
						<option value="A+ve">O-ve</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>
						Department:
					</td>
					<td>
						<input type="text" name="department"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Program:
					</td>
					<td>
						<input type="text" name="program"style="font-size: 15px;">
					</td>
				</tr>
				<tr>
					<td>
						Password:
					</td>

					<td>
						<input type="Password" name="password">
					</td>
				</tr>
			</table>

			<hr>
			<input type="submit" value="submit" name="submit" style ="margin-bottom: 10px; margin-left: 25px; font-size: 15px;">

		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>