<?php 
session_start();
if(isset($_SESSION['uname'])){
}

else{

	echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>

<span class="textcenter textmain"><h1>Edit Student Info</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
			<table>
				
				<tr>
					<td colspan="2" class="textcenter">

					<img src= <?php echo $student['image']; ?> alt="Profile Picture" class="userimage"><br>
  					<input type="file" name="file">
  					<br>
					</td>			
				</tr>
				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input value="<?php echo $student['firstname'] ?>" type="text" name="firstname">
					</td>

				</tr>

				<tr>
					<td>
						Last Name:
					</td>
					<td>
						<input value="<?php echo $student['lastname'] ?>" type="text" name="lastname">
					</td>
					
				</tr>

				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input value="<?php echo $student['dob'] ?>" type="Date" name="dob"style="font-size: 15px;">
					</td>
				</tr>


				<tr>
					<td>
						Contact:
					</td>
					<td>
						<input value="<?php echo $student['contact'] ?>" type="text" name="contact">
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
						<input value="<?php echo $student['email'] ?>" type="text" name="email">
					</td>
				</tr>


				<tr>
					<td>
						Address:
					</td>
					<td>
						<textarea name="address" rows="8" cols="20" placeholder="Please Write Your Address Here-">    
							<?php echo $student['address'] ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>
						Department:
					</td>
					<td>
						<input value="<?php echo $student['dept'] ?>" type="text" name="department"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Program:
					</td>
					<td>
						<input value="<?php echo $student['program'] ?>" type="text" name="program">
					</td>
				</tr>
				<tr>
					<td>
						
					</td>

					<td>
						<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<input type="submit" value="submit" name="submit">

		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>