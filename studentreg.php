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


	<span class="textcenter textmain"><h1>Student Registration</h1></span>
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="firstname" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">First Name</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="firstname" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Last Name</span>
					</label>
			</div>

			<div class="form">
					<input type="Date" name="dob" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Date of Birth</span>
					</label>
			</div>

			<div class="form">
					<select name="gender" required />
						<option></option>	
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select> 
					<label for="firstname" class="label-name">
					<span class="content-name">Gender</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="contact" autocomplete="off" maxlength="15" size="15" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Contact</span>
					</label>
			</div>			

			<div class="form">
					<input type="text" name="email" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Email</span>
					</label>
			</div>

			<div class="form">
					<select name="nationality" required />
						<option></option>	
						<option value="Bangladesh">Bangladesh</option>
						</select>
					<label for="firstname" class="label-name">
					<span class="content-name">Nationality</span>
					</label>
			</div>

			<div class="form">
					<input type="text" autocomplete="off" name="address" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Address</span>
					</label>
			</div>

			<div class="form">
					<select name="blood" required />
						<option></option>	
						<option value="A+ve">A+ve</option>
						<option value="A+ve">B+ve</option>
						<option value="A+ve">AB+ve</option>
						<option value="A+ve">O+ve</option>
						<option value="A+ve">A-ve</option>
						<option value="A+ve">B-ve</option>
						<option value="A+ve">AB-ve</option>
						<option value="A+ve">O-ve</option>
					</select>
					<label for="firstname" class="label-name">
					<span class="content-name">Blood Group</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="department" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Department</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="program" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Program</span>
					</label>
			</div>

			<div class="form">
					<input type="Password" name="password" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">Password</span>
					</label>
			</div>
			<img src= "userdp.png" alt="Profile Picture" class="userimage" ;><br>
  			<input type="file" name="file">
  			<br>
			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
	</div>

</div>

	

<?php include('footer.php');?>

</body>
</html>