<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/courseInfo.php';

$courses = fetchAllCourses();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Course List</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
	
<form action="registration2.php" method="post">
	<div class="searchbox">
	<input id="reg-semester" placeholder="Enter Semester" class="searchtext" autocomplete="off" type="text" name="reg-semester" required/></div>
   <table class="table" id="table">
     <thead>
	    <tr>
	    	<th>Select</th>
	     	<th>Section ID</th>
			<th>Course ID</th>
			<th>Course Name [Section]</th>
		</tr>
	     </thead>
	     <tbody>
	     	  <?php foreach ($courses as $i => $course): ?>
				<tr>
					<td data-label="Select">
						<label class="container">
						<input type="checkbox" name="reg-course" value=<?php echo $course['id'] ?>>
						<span class="checkmark"></span>
						</label>
					</td>
					<td data-label="Section ID"><?php echo strval($course['id']) ?></td>

					<td data-label="Course ID"><?php echo $course['course_id'] ?></td>
					<td data-label="Course Name [Section]"><?php echo $course['coursename'].' ['.$course['section'].']';?></td>
					
				</tr>
			<?php endforeach; ?>
	     </tbody>
	   </table>
	   <input type="submit" name="submit">
   </form>

   </div>

</div>

<?php include('footer.php');?>



</body>
</html>