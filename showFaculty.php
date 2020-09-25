<?php 

session_start();
if(isset($_SESSION['uname'])){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/facultyInfo.php';

if($_SESSION['type'] == "admin"){
	$faculty = fetchFaculty($_GET['id']);
}

elseif($_SESSION['type'] == "faculty"){
	$faculty = fetchFaculty($_SESSION['uname']);
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

	elseif($_SESSION['type'] == "faculty"){
		include('header3.php');
	}
	?>
<span class="textcenter textmain"><h1>Show All Facultys</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Faculty; ID- <?php echo $faculty['id'];  ?></h6></span><br>
		
		<table class="table shtable">
			<tbody>
				<tr>
					<th>First Name</th>
				<td data-label="First Name"><?php echo $faculty['firstname'] ?></td></tr>
				<tr>
					<th>Last Name</th>
				<td data-label="Last Name"><?php echo $faculty['lastname'] ?></td></tr>
				<tr>
					<th>Date of Birth</th>
				<td data-label="Date of Birth"><?php echo $faculty['dob'] ?></td></tr>
				<tr>
					<th>Contact</th>
				<td data-label="Contact"><?php echo $faculty['contact'] ?></td></tr>
				<tr>
					<th>Email</th>
				<td data-label="Email"><?php echo $faculty['email'] ?></td></tr>
				<tr>
					<th>Nationality</th>
				<td data-label="Nationality"><?php echo $faculty['nationality'] ?></td></tr>
				<tr>
					<th>Address</th>
				<td data-label="Address"><?php echo $faculty['address'] ?></td></tr>
				<tr>
					<th>Blood Group</th>
				<td data-label="Blood Group"><?php echo $faculty['blood'] ?></td></tr>
				<tr>
					<th>Department</th>
				<td data-label="Department"><?php echo $faculty['dept'] ?></td></tr>
				
				<tr>
					<th>Image</th>
				<td data-label="Image"><img width="200px" src="uploads/<?php echo $faculty['image'] ?>" alt="<?php echo $faculty['firstname'] ?>"></td></tr>
			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>

<script>
	
</script>
</body>
</html>