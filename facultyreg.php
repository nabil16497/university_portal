<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
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
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createFaculty.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="firstname" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">First Name</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="lastname" autocomplete="off" required />
					<label for="lastname" class="label-name">
					<span class="content-name">Last Name</span>
					</label>
			</div>

			<div class="form">
					<input type="Date" name="dob" autocomplete="off" required />
					<label for="dob" class="label-name">
					<span class="content-name">Date of Birth</span>
					</label>
			</div>

			<div class="form">
					<select name="gender" required />
						<option selected disabled hidden></option>	
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select> 
					<label for="gender" class="label-name">
					<span class="content-name">Gender</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="contact" autocomplete="off" maxlength="15" size="15" required />
					<label for="contact" class="label-name">
					<span class="content-name">Contact</span>
					</label>
			</div>			

			<div class="form">
					<input type="text" name="email" autocomplete="off" required />
					<label for="email" class="label-name">
					<span class="content-name">Email</span>
					</label>
			</div>

			<div class="form">
					<select name="nationality" required />
						<option selected disabled hidden></option>
						<option value="Bangladesh">Bangladesh</option>
						</select>
					<label for="nationality" class="label-name">
					<span class="content-name">Nationality</span>
					</label>
			</div>

			<div class="form">
					<input type="text" autocomplete="off" name="address" required />
					<label for="address" class="label-name">
					<span class="content-name">Address</span>
					</label>
			</div>

			<div class="form">
					<select name="blood" required />
						<option selected disabled hidden></option>
						<option value="A+ve">A+ve</option>
						<option value="A+ve">B+ve</option>
						<option value="A+ve">AB+ve</option>
						<option value="A+ve">O+ve</option>
						<option value="A+ve">A-ve</option>
						<option value="A+ve">B-ve</option>
						<option value="A+ve">AB-ve</option>
						<option value="A+ve">O-ve</option>
					</select>
					<label for="blood" class="label-name">
					<span class="content-name">Blood Group</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="department" autocomplete="off" required />
					<label for="department" class="label-name">
					<span class="content-name">Department</span>
					</label>
			</div>


			<div class="form">
					<input type="Password" name="password" autocomplete="off" required />
					<label for="password" class="label-name">
					<span class="content-name">Password</span>
					</label>
			</div>
			<img src= "userdp.png" alt="Profile Picture" class="userimage" ;><br>
  			<input type="file" id="file" name="file">
  			<label for="file" class="filelabel">Select</label>
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