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


	<span class="textcenter textmain"><h1>Student Registration</h1></span>
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createStudent.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()">

			<div class="form">
					<input type="text" id="firstname" name="firstname" autocomplete="off" required />
					<label for="firstname" class="label-name">
					<span class="content-name">First Name</span>
					</label>
			</div>
			<span class="red_text" id="fne"></span>

			<div class="form">
					<input type="text" id="lastname" name="lastname" autocomplete="off" required />
					<label for="lastname" class="label-name">
					<span class="content-name">Last Name</span>
					</label>
			</div>
			<span class="red_text" id="lne"></span>
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
					<input type="text" id="contact" name="contact" autocomplete="off" maxlength="15" size="15" required />
					<label for="contact" class="label-name">
					<span class="content-name">Contact</span>
					</label>
			</div>			
			<span class="red_text" id="contacte"></span>
			<div class="form">
					<input type="text" id="email" name="email" autocomplete="off" required />
					<label for="email" class="label-name">
					<span class="content-name">Email</span>
					</label>
			</div>
			<span class="red_text" id="emaile"></span>
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
					<input type="text" name="program" autocomplete="off" required />
					<label for="program" class="label-name">
					<span class="content-name">Program</span>
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

<script type="text/javascript">
	
	
	function checkmail( email ) {
	var at = email.indexOf( "@" );
	var dot = email.lastIndexOf( "\." );
	return email.length > 0 &&
	at > 0 &&
	dot > at + 1 &&
	dot < email.length &&
	email[at + 1] !== "." &&
	email.indexOf( " " ) === -1 &&
	email.indexOf( ".." ) === -1;
	}
	function validation(){
	var fn = document.getElementById("firstname").value;
	var ln = document.getElementById("lastname").value;
	var phone = document.getElementById("contact").value;
	var email = document.getElementById("email").value;
	if( (fn!="") && (!(fn>='A' && fn<='Z' || fn>='a'&& fn<='z') || fn.length<2))
	{
	document.getElementById("fne").innerHTML = "Should be atleast 2 characters and only alphabet.";
		return false;
	}
	if((ln!="") && (!(ln>='A' && ln<='Z' || ln>='a'&& ln<='z') || ln.length<2))
	{
	document.getElementById("lne").innerHTML = "Should be atleast 2 characters and only alphabet.";
		return false;
	}
	if(isNaN(phone) || phone.length >15)
	{
	document.getElementById("contacte").innerHTML = "Only digits and not morethan 15 digits.";
		return false;
	}
	if(!checkmail(email) && email != "")
	{
	document.getElementById("emaile").innerHTML = "Invalid email address.";
		return false;
	}
	
	}
</script>

</body>
</html>