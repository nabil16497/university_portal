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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Faculty Registration</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createFaculty.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td colspan="2" class="textcenter">
						<img src= "userdp.png" alt="Profile Picture" class="userimage" ;><br>
  					<input type="file" name="file">
  					<br>
					</td>
				</tr>
				
				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input type="text" name="firstname">
					</td>

				</tr>

				<tr>
					<td>
						Last Name:
					</td>
					<td>
						<input type="text" name="lastname">
					</td>
					
				</tr>

				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input type="Date" name="dob">
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
						<input type="text" name="contact">
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="text" name="email">
					</td>
				</tr>

				<tr>
					<td>
						Nationality:
					</td>
					<td>
						<select name="nationality">
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
						<textarea name="address" rows="8" cols="20" placeholder="Please Write Your Address Here-"></textarea>
					</td>
				</tr>

				<tr>
					<td>
						Blood Group:
					</td>
					<td>
						<select name="blood">
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
						<input type="text" name="department">
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
			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
	</div>

</div>

	

<?php include('footer.php');?>

</body>
</html>