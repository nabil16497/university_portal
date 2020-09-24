<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/facultyInfo.php';

$faculty = fetchFaculty($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('header1.php');?>
<span class="textcenter textmain"><h1>Show All Facultys</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Faculty; ID- <?php echo $faculty['id'];  ?></h6></span><br>
		
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
				<th>Image</th>

			</thead>
			<tbody>
				<td data-label="First Name"><?php echo $faculty['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $faculty['lastname'] ?></td>
				<td data-label="Dtae of Birth"><?php echo $faculty['dob'] ?></td>
				<td data-label="Contact"><?php echo $faculty['contact'] ?></td>
				<td data-label="Email"><?php echo $faculty['email'] ?></td>
				<td data-label="Nationality"><?php echo $faculty['nationality'] ?></td>
				<td data-label="Address"><?php echo $faculty['address'] ?></td>
				<td data-label="Blood Group"><?php echo $faculty['blood'] ?></td>
				<td data-label="Department"><?php echo $faculty['dept'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $faculty['firstname'] ?>"></td>
			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>