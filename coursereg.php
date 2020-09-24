<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Crouse Registration</h1></span>
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createCourse.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="courseid" autocomplete="off" required />
					<label for="courseid" class="label-name">
					<span class="content-name">Course ID</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="coursename" autocomplete="off" required />
					<label for="coursename" class="label-name">
					<span class="content-name">Course Name</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="section" autocomplete="off" required />
					<label for="section" class="label-name">
					<span class="content-name">Section</span>
					</label>
			</div>

			<div class="form">
					<select name="credit" id="credit" onclick="disable()" required />
						<option selected disabled hidden></option>
						<option value=1>1</option>
						<option value=3>3</option>
						</select>
					<label for="credit" class="label-name">
					<span class="content-name">Credit</span>
					</label>
			</div>

			<div class="form">
					<select name="day1" required />
						<option selected disabled hidden></option>
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
					<input type="time" name="starttime1" autocomplete="off" required />
					<label for="starttime1" class="label-name">
					<span class="content-name">Start Time (Day 1)</span>
					</label>
			</div>



			<div class="form">
					<input type="time" name="endtime1" autocomplete="off" required />
					<label for="endtime1" class="label-name">
					<span class="content-name">End Time (Day 1)</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="room1" autocomplete="off" required />
					<label for="room1" class="label-name">
					<span class="content-name">Room No. (Day 1)</span>
					</label>
			</div>

			<div class="form">
					<select name="day2" id="day2" required />
						<option selected disabled hidden></option>

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
					<input type="time" id="starttime2" name="starttime2" autocomplete="off" required />
					<label for="starttime2" class="label-name">
					<span class="content-name">Start Time (Day 2)</span>
					</label>
			</div>

			<div class="form">
					<input type="time" id="endtime2" name="endtime2" autocomplete="off" required />
					<label for="endtime2" class="label-name">
					<span class="content-name">End Time (Day 2)</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="room2" autocomplete="off" required />
					<label for="room2" class="label-name">
					<span class="content-name">Room No. (Day 2)</span>
					</label>
			</div>			
  			
  			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
	</div>

</div>

	

<?php include('footer.php');?>


	<script>
		function disable()
		{
			var credit = document.getElementById('#credit').value;
			var day2=document.getElementById('#day2');
			
			if(credit=="3")
			{
				day2.focus();
			}
		}
	</script>
</body>
</html>