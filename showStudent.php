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
	<style>
		.divt{
			border:3px solid #000000;
			border-radius: 10px; 
			margin-top: 10px;
			margin-bottom: 10px;
			padding: auto;

		}
		
	</style>
</head>
<body>
<?php include('header1.php');?>
<div class="divt">
	<span style="text-align: center;color: #e80000"><h1>Full Details</h1></span>
	<div style="margin: auto; font-size: 15px;padding: 10px;">
		
		<table border="2px" style="text-align: center;margin: auto; font-size: 20px;">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Date of Birth</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Nationality</th>
				<th>Address</th>
				<th>Blood Group</th>
				<th>Department</th>
				<th>Program</th>
				<th>Image</th>

			</tr>
			<tr>
				<td><?php echo $student['firstname'] ?></td>
				<td><?php echo $student['lastname'] ?></td>
				<td><?php echo $student['dob'] ?></td>
				<td><?php echo $student['contact'] ?></td>
				<td><?php echo $student['email'] ?></td>
				<td><?php echo $student['nationality'] ?></td>
				<td><?php echo $student['address'] ?></td>
				<td><?php echo $student['blood'] ?></td>
				<td><?php echo $student['dept'] ?></td>
				<td><?php echo $student['program'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
			</tr>

		</table>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>