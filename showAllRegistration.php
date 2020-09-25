<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/registrationInfo.php';

$registrations = fetchAllRegistration();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Show All Registrations</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">

   <table class="table" id="table">
     <thead>
    <tr>
     	<th>ID</th>
		<th>Student ID</th>
		<th>Course</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody>
     	  <?php foreach ($registrations as $i => $registration): ?>
			<tr>
				<td data-label="ID"><abbr title="Click here to see all full details"><a href="showStudent.php?id=<?php echo $student['id'] ?>"><span class="textmain"><?php echo strval($registration['id']) ?></a></abbr></span></td>

				<td data-label="Student ID"><?php echo $registration['student_id'] ?></td>
				<td data-label="Course"><?php echo $registration['coursename'].' ['.$registration['section'].']';  ?></td>
								<td data-label="Action">
					<a href="controller/deleteRegistration.php?id=<?php echo $registration['id'] ?>">
							<span class="textmain textcenter">DELETE</span></a>
						</td>
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>

   </div>

</div>

<?php include('footer.php');?>

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>