<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/departmentInfo.php';
$department = fetchdepartmentedit($_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>


<?php include('header1.php');?>

<span class="textcenter textmain"><h1>Edit Department Info</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/updateDepartment.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="departmentname" value="<?php echo $department['name'] ?>" autocomplete="off" required />
					<label for="departmentname" class="label-name">
					<span class="content-name">Department Name</span>
					</label>
			</div>

			<div class="form">
					<input type="text" name="status" value="<?php echo $department['status'] ?>" autocomplete="off" required />
					<label for="status" class="label-name">
					<span class="content-name">Status</span>
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