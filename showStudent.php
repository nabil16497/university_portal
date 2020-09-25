<?php 

session_start();
if(isset($_SESSION['uname'])){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/studentInfo.php';

if($_SESSION['type'] == "admin"){
	$student = fetchStudent($_GET['id']);
}

elseif($_SESSION['type'] == "student"){
	$student = fetchStudent($_SESSION['uname']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<?php
if($_SESSION['type'] == "admin"){
	include('header1.php');
}

elseif($_SESSION['type'] == "student"){
	include('header2.php');
}
?>
<span class="textcenter textmain"><h1>Show Details</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Student; ID- <?php echo $student['id'];  ?></h6></span><br>

	
		<table class="table shtable">
			
			<tbody>
				<tr>
					<th>First Name</th>
				<td data-label="First Name"><?php echo $student['firstname'] ?></td></tr>
				<tr>
					<th>Last Name</th>
				<td data-label="Last Name"><?php echo $student['lastname'] ?></td></tr>
				<tr>
					<th>Date of Birth</th>
				<td data-label="Dtae of Birth"><?php echo $student['dob'] ?></td></tr>
				<tr>
					<th>Contact</th>
				<td data-label="Contact"><?php echo $student['contact'] ?></td></tr>
				<tr>
					<th>Email</th>
				<td data-label="Email"><?php echo $student['email'] ?></td></tr>
				<tr>
					<th>Nationality</th>
				<td data-label="Nationality"><?php echo $student['nationality'] ?></td></tr>
				<tr>
					<th>Address</th>
				<td data-label="Address"><?php echo $student['address'] ?></td></tr>
				<tr>
					<th>Blood Group</th>
				<td data-label="Blood Group"><?php echo $student['blood'] ?></td></tr>
				<tr>
					<th>Department</th>
				<td data-label="Department"><?php echo $student['dept'] ?></td></tr>
				<tr>
					<th>Program</th>
				<td data-label="Program"><?php echo $student['program'] ?></td></tr>
				<tr>
					<th>Image</th>
				<td data-label="Image"><img width="200px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td></tr>
			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>

<script>
	
</script>
</body>
</html>