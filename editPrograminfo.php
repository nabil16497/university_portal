<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/programInfo.php';
$program = fetchProgram($_GET['id']);

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
		<form action="controller/updateProgram.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="programname" value="<?php echo $program['name'] ?>" autocomplete="off" required />
					<label for="name" class="label-name">
					<span class="content-name">Program</span>
					</label>
			</div>

			<div class="form">
					
					<span class="content-name">Department Name- <?php echo $program['deptname'] ?></span>
				
			</div>

			<div class="form">
					
					<span class="content-name">Department ID- <?php echo $program['deptid'] ?></span>
					
			</div>
			<div class="form">
					<input type="text" name="status" value="<?php echo $program['status'] ?>" autocomplete="off" required />
					<label for="status" class="label-name">
					<span class="content-name">Status</span>
					</label>
			</div>
			
  			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			<input type="hidden" name="deptname" value="<?php echo $program['deptname'] ?>">
			<input type="hidden" name="deptid" value="<?php echo $program['deptid'] ?>">
  			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
</div>
</div>
<?php include('footer.php');?>



</body>
</html>