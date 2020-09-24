<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/courseInfo.php';

$course = fetchCourse($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<?php include('header1.php');?>
<span class="textcenter textmain"><h1>Show Details</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Course- <?php echo $course['coursename'].' ['.$course['section'].']';  ?></h6></span><br>

	
		<table class="table shtable">
			
			<tbody>
				<tr>
					<th>Section ID</th>
				<td data-label="Section ID"><?php echo $course['id'] ?></td></tr>
				<tr>
					<th>Course ID</th>
				<td data-label="Course ID"><?php echo $course['course_id'] ?></td></tr>
				<tr>
					<th>Credit</th>
				<td data-label="Credit"><?php echo $course['credit'] ?></td></tr>
					<th>Day 1</th>
				<td data-label="Day 1"><?php echo $course['day1'] ?></td>
				<td data-label="Start Time (Day 1)">Start: <?php echo $course['starttime1'] ?></td>
				<td data-label="End Time (Day 1)">End: <?php echo $course['endtime1'] ?></td>
				<td data-label="Room (Day 1)">Room: <?php echo $course['room1'] ?></td>
				</tr>
				<tr>
					<th>Day 2</th>
				<td data-label="Day 2"><?php echo $course['day1'] ?></td>
				<td data-label="Start Time (Day 2)">Start: <?php echo $course['starttime2'] ?></td>
				<td data-label="End Time (Day 2)">End: <?php echo $course['endtime2'] ?></td>
				<td data-label="Room (Day 2)">Room: <?php echo $course['room2'] ?></td>
				</tr>
			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>

<script>
	
</script>
</body>
</html>