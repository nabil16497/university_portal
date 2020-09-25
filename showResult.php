<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/resultInfo.php';

$result = fetchResult($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include('header1.php');?>
<span class="textcenter textmain"><h1>Show All Results</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<span class="textcenter textmain"><h6>Detailed Information about Student Results; ID- <?php echo $result['student_id'];  ?></h6></span><br>
		
		<table class="table">
			<thead>
				<th>Semester Id</th>
				<th>Student Id</th>
				<th>Faculty Id</th>
				<th>Section Id</th>
				<th>Midterm Marks</th>
				<th>Finalterm Marks</th>
				<th>Total Marks</th>
				<th>Final Grade</th>

			</thead>
			<tbody>
				<td data-label="Semester Id"><?php echo $result['semester_id'] ?></td>
				<td data-label="Student Id"><?php echo $result['student_id'] ?></td>
				<td data-label="Faculty Id"><?php echo $result['faculty_id'] ?></td>
				<td data-label="Section Id"><?php echo $result['section_id'] ?></td>
				<td data-label="Midterm Marks"><?php echo $result['midterm_mark'] ?></td>
				<td data-label="Finalterm Marks"><?php echo $result['finalterm_mark'] ?></td>
				<td data-label="Total Marks"><?php echo $result['total_marks'] ?></td>
				<td data-label="Final Grade"><?php echo $result['final_grade'] ?></td>

			</tbody>

		</table>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>