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


	<span class="textcenter textmain"><h1>Show All courses</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
	
	</form>

   <table class="table" id="table">
     <thead>
    <tr>
     	<th>Section ID</th>
		<th>Course ID</th>
		<th>Course Name [Section]</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody>
     	  <?php foreach ($courses as $i => $course): ?>
			<tr>
				<td data-label="Section ID"><?php echo strval($course['id']) ?></td>

				<td data-label="Course ID"><?php echo $course['course_id'] ?></td>
				<td data-label="Course Name [Section]"><abbr title="Click here to see all full details"><a href="showCourse.php?id=<?php echo $course['id'] ?>"><span class="textmain"><?php echo $course['coursename'].' ['.$course['section'].']';  ?></a></abbr></span></td>
				<td data-label="Action">
					<a href="editCourseinfo.php?id=<?php echo $course['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteCourse.php?id=<?php echo $course['id'] ?>">
							<span class="textmain margin-left">DELETE</span></a>
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