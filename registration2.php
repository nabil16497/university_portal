<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

if(!isset($_POST['reg-course'])){

	echo "<script>alert('Select a Course.'); window.location.href='registration1.php';</script>";

}
require_once 'controller/facultyInfo.php';

$facultys = fetchAllFacultys();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Faculty List</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
      <div class="textcenter textmain margin-bottom">

   <form action="registration3.php" method="post">
   <table class="table">
     <thead>
     	<th>Select</th>
     	<th>ID</th>
		<th>First Name</th>
		<th>Department</th>
		<th>Image</th>
     </thead>
     <tbody>
     	  <?php foreach ($facultys as $i => $faculty): ?>
			<tr>
				<td data-label="Select">
					<label class="container">
						<input type="checkbox" name="reg-faculty" value=<?php echo $faculty['id'] ?>>
						<span class="checkmark"></span>
					</label>
				</td>

				<td data-label="ID"><?php echo $faculty['id'] ?></td>

				<td data-label="First Name"><?php echo $faculty['firstname'] ?></td>
				<td data-label="Department"><?php echo $faculty['dept'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $faculty['image'] ?>" alt="<?php echo $faculty['firstname'] ?>"></td>
				
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>
   <input type="hidden" name="reg-semester" value=<?php echo $_POST['reg-semester'] ?>>
   <input type="hidden" name="reg-course" value=<?php echo $_POST['reg-course'] ?>>
   <input type="submit" name="submit">
</form>
   </div>

</div>

<?php include('footer.php');?>

</script>
</body>
</html>