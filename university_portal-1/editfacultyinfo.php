<?php 

require_once 'controller/facultyInfo.php';
$faculty = fetchFaculty($_GET['id']);

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
	<span style="text-align: center;color: #e80000"><h1>Edit Faculty Info</h1></span>
	<div style="margin: auto; font-size: 15px;padding: 10px;">
		<form action="controller/updateFaculty.php" method="POST" enctype="multipart/form-data">
			<table style="padding: 10px;">
		
				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input value="<?php echo $faculty['firstname'] ?>" type="text" name="firstname"style="font-size: 15px;">
					</td>
					<td rowspan="11">

					<img src= <?php echo $faculty['image']; ?> alt="Profile Picture" style="max-height: 200px ; margin-bottom: 10px;"><br>
  					<input type="file" name="file">
  					<span style="color: #ff0000">
					</td>

				</tr>

				<tr>
					<td>
						Last Name:
					</td>
					<td>
						<input value="<?php echo $faculty['lastname'] ?>" type="text" name="lastname"style="font-size: 15px;">
					</td>
					
				</tr>

				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input value="<?php echo $faculty['dob'] ?>" type="Date" name="dob"style="font-size: 15px;">
					</td>
				</tr>


				<tr>
					<td>
						Contact:
					</td>
					<td>
						<input value="<?php echo $faculty['contact'] ?>" type="text" name="contact"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
						<input value="<?php echo $faculty['email'] ?>" type="text" name="email"style="font-size: 15px;">
					</td>
				</tr>


				<tr>
					<td>
						Address:
					</td>
					<td>
						<textarea name="address" rows="6" cols="50" placeholder="Please Write Your Address Here-">    
							<?php echo $faculty['address'] ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td>
						Department:
					</td>
					<td>
						<input value="<?php echo $faculty['dept'] ?>" type="text" name="department"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Program:
					</td>
					<td>
						<input value="<?php echo $faculty['program'] ?>" type="text" name="program"style="font-size: 15px;">
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

			<hr>
			<input type="submit" value="submit" name="submit" style ="margin-bottom: 10px; margin-left: 25px; font-size: 15px;">

		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>