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

<?php
	$fname = $lname = $email = $dob = $gender = $contact = $blood = $nationality = $address = $dept = $program = "";

	$fnameerror = $lnameerror = $emailerror =  $doberror = $gendererror = $contacterror = $blooderror = $nationalityerror = $addresserror = $depterror = $programerror = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
    $fnameerror = "Name can not be empty";
  } else {
  	$regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
  	if(!preg_match($regex, $_POST["firstname"])){
  		$fnameerror = "Only letters, period and dash is allowed";
  	}
    else{
    	$fname = $_POST["firstname"];
    }
  }
  
  if (empty($_POST["lastname"])) {
    $fnameerror = "Name can not be empty";
  } else {
  	$regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
  	if(!preg_match($regex, $_POST["lastname"])){
  		$fnameerror = "Only letters, period and dash is allowed";
  	}
    else{
    	$fname = $_POST["lastname"];
    }
  }

  if (empty($_POST["email"])) {
    $emailerror = "Email can not be empty";
  } else {
    $email = ($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerror = "Invalid email format";
      $email="";
    }
  }

  if(empty($_POST["dob"])){
  	$doberror = "Select your Date of Birth";
  }
  else{

  	$dob=$_POST["dob"];

  }

  if (empty($_POST["gender"])) {
    $gendererror = "Select gender";
  } else {
    $gender = $_POST["gender"];
  }
  if(empty($_POST["contact"])){
  	$contacterror = "You Must Enter Your Contact Number.";
  }
  {
  $pregx = "/^([+]{1}[8]{2})?(01){1}[3-9]{1}\d{8})$/";

  if(!preg_match($pregx, $_POST["contact"]))
  {
  	$contacterror="Invalid Phone Number";
  }

  else{
  	$contact = $_POST["contact"];
  }
 }


  if(empty($_POST["blood"])){
  	$blooderror = "Blood group can not be empty";
  }
  else{
  	$blood = $_POST["blood"];
  }


   if(empty($_POST["nationality"])){
  	$nationalityerror = "Select Nationality";
  }
  else{
  	$nationality = $_POST["nationality"];
  }

  if(empty($_POST["department"])){
  	$depterror = "Select A Department";
  }
  else{
  	$dept = $_POST["department"];
  }

  if(empty($_POST["address"])){
  	$addresserror = "Write Done An Address.";
  }
  else{
  	$address = $_POST["address"];
  }

  if(empty($_POST["program"])){
  	$programerror = "Select A Program";
  }
  else{
  	$program = $_POST["program"];
  }


}









	$pperror ="";
	$picaddress = "userdp.png";
	if(isset($_POST['submit'])){
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allow = array('jpg','jpeg','png');
	if(!empty($fileName)){
	if (in_array($fileActualExt, $allow)) {
		if($fileError ===0){
			if($fileSize < 4194304){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDes = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				$ppm = "Image sucessfully uploaded";
				$picaddress = $fileDes;
			}
			else{
				$pperror = "File size too large (Maximum file size- 4MB)";
			}
		}
		else{
			$pperror = "There was an error uploading your file!";
		}
	}
	else{
		$pperror = "Only images are allowed (jpeg, jpg, png)";
	}
}
	else{
		$pperror = "Please Select an image";
	}
 }

 ?>
<?php include('header1.php');?>

<div style="border:3px solid #000000;border-radius: 10px; margin-top: 10px;margin-bottom: 10px;padding: auto;">
	<span style="text-align: center;color: #e80000"><h1>Student Registration</h1></span>
	<div style="margin: auto; font-size: 15px;padding: 10px;">
		<form action="studentreg.php" method="POST" enctype="multipart/form-data">
			<table style="padding: 10px;">
				<tr>
					<td>
						ID:
					</td>
					<td>
						<input type="text" name="id" placeholder="XX-XXXXX-X">
					</td>
				</tr>

				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input type="text" name="firstname"style="font-size: 15px;">
					</td>
					<td rowspan="11">

					<img src= <?php echo $picaddress; ?> alt="Profile Picture" style="max-height: 200px ; margin-bottom: 10px;"><br>
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
						<input type="radio" name="gender" value=0> Female 
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
			</table>

			<hr>
			<input type="submit" value="submit" name="submit" style ="margin-bottom: 10px; margin-left: 25px; font-size: 15px;">

		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>