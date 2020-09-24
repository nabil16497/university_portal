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

<span class="textcenter textmain"><h1>Edit Course Info</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/updateCourse.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="courseid" value="<?php echo $course['course_id'] ?>" autocomplete="off" required />
					<label for="courseid" class="label-name">
					<span class="content-name">Course ID</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="coursename" value="<?php echo $course['coursename'] ?>" autocomplete="off" required />
					<label for="coursename" class="label-name">
					<span class="content-name">Course Name</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="section" value="<?php echo $course['section'] ?>" autocomplete="off" required />
					<label for="section" class="label-name">
					<span class="content-name">Section</span>
					</label>
			</div>

			<div class="form">
					<select name="credit" id="credit" onclick="disable()" required />
						<option selected> <?php echo $course['credit'] ?></option>
						<option value=1>1</option>
						<option value=3>3</option>
						</select>
					<label for="credit" class="label-name">
					<span class="content-name">Credit</span>
					</label>
			</div>

			<div class="form">
					<select name="day1" required />
						<option selected><?php echo $course['day1'] ?></option>
						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
					</select>
					<label for="day1" class="label-name">
					<span class="content-name">Day 1</span>
					</label>
			</div>

			<div class="form">
					<input type="time" name="starttime1" value="<?php echo $course['starttime1'] ?>" autocomplete="off" required />
					<label for="starttime1" class="label-name">
					<span class="content-name">Start Time (Day 1)</span>
					</label>
			</div>

			<div class="form">
					<input type="time" name="endtime1" value="<?php echo $course['endtime1'] ?>" autocomplete="off" required />
					<label for="endtime1" class="label-name">
					<span class="content-name">End Time (Day 1)</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="room1" value="<?php echo $course['room1'] ?>" autocomplete="off" required />
					<label for="room1" class="label-name">
					<span class="content-name">Room No. (Day 1)</span>
					</label>
			</div>

			<div class="form">
					<select name="day2" id="day2" required />
						<option selected> <?php echo $course['day2'] ?></option>

						<option value="Sunday">Sunday</option>
						<option value="Monday">Monday</option>
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
					</select>
					<label for="day2" class="label-name">
					<span class="content-name">Day 2</span>
					</label>
			</div>

			<div class="form">
					<input type="time" id="starttime2" value="<?php echo $course['starttime2'] ?>" name="starttime2" autocomplete="off" required />
					<label for="starttime2" class="label-name">
					<span class="content-name">Start Time (Day 2)</span>
					</label>
			</div>

			<div class="form">
					<input type="time" id="endtime2" value="<?php echo $course['endtime2'] ?>" name="endtime2" autocomplete="off" required />
					<label for="endtime2" class="label-name">
					<span class="content-name">End Time (Day 2)</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="room2" value="<?php echo $course['room2'] ?>" autocomplete="off" required />
					<label for="room2" class="label-name">
					<span class="content-name">Room No. (Day 2)</span>
					</label>
			</div>			
  			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
</div>
</div>
<?php include('footer.php');?>



</body>
</html>