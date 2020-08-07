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

<div style="border:3px solid #000000;border-radius: 10px; margin-top: 20px;margin-bottom: 10px;padding: auto;">
	<div style="margin: auto; font-size: 15px;padding: 10px;">
		<form action="changepp.php" method="POST" enctype="multipart/form-data">
			<table style="padding: 10px;">
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
  					<span style="color: #ff0000"><?php echo $pperror ?></span>
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
						<input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other 
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
						<textarea name="address" rows="6" cols="50">Please Write Your Address Here-</textarea>
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
			<input type="submit" value="submit" name="submit" style ="margin-bottom: 10px; margin-left: 20px;">

		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>