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
<span class="textcenter textmain"><h1>Show All Students</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Student; ID- <?php echo $student['id'];  ?></h6></span><br>
		
		<table class="table">
			<thead>
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

			</thead>
			<tbody>
				<td data-label="First Name"><?php echo $student['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $student['lastname'] ?></td>
				<td data-label="Dtae of Birth"><?php echo $student['dob'] ?></td>
				<td data-label="Contact"><?php echo $student['contact'] ?></td>
				<td data-label="Email"><?php echo $student['email'] ?></td>
				<td data-label="Nationality"><?php echo $student['nationality'] ?></td>
				<td data-label="Address"><?php echo $student['address'] ?></td>
				<td data-label="Blood Group"><?php echo $student['blood'] ?></td>
				<td data-label="Department"><?php echo $student['dept'] ?></td>
				<td data-label="Program"><?php echo $student['program'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>