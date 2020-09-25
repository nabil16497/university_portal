<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

if(!isset($_POST['reg-faculty'])){

	echo "<script>alert('Select a Faculty.'); window.location.href='registration2.php';</script>";

}


require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Student List</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
	<form action="controller/registration.php" method="post">
   <table class="table" id="table">
     <thead>
    <tr>
    	<th>Select</th>
     	<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Program</th>
		<th>Image</th>
		
	</tr>
     </thead>
     <tbody>
     	  <?php foreach ($students as $i => $student): ?>
			<tr>
				<td data-label="Select">
						<label class="container">
						<input type="checkbox" name="reg-student[]" value=<?php echo $student['id'] ?>>
						<span class="checkmark"></span>
						</label>
					</td>

				<td data-label="ID"><?php echo strval($student['id']) ?></td>

				<td data-label="First Name"><?php echo $student['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $student['lastname'] ?></td>
				<td data-label="Program"><?php echo $student['program'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
				
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>

   <input type="hidden" name="reg-semester" value=<?php echo $_POST['reg-semester'] ?>>
   <input type="hidden" name="reg-faculty" value=<?php echo $_POST['reg-faculty'] ?>>
   <input type="hidden" name="reg-course" value=<?php echo $_POST['reg-course'] ?>>
   <input type="submit" name="submit">
</form>
   </div>

</div>

<?php include('footer.php');?>

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>