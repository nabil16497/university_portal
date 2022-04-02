<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/departmentInfo.php';
$departments = fetchAlldepartments();
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
		<form action="controller/createDepartment.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="deptname" autocomplete="off" required />
					<label for="deptname" class="label-name">
					<span class="content-name">Department Name</span>
					</label>
			</div>		
  			
  			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
	</div>

</div>





<span class="textcenter textmain"><h1>Departments</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">

   <table class="table" id="table">
     <thead>
    <tr>
     	<th>ID</th>
		<th>Department Name</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody id="tablebody">
     	  <?php foreach ($departments as $i => $department): ?>
			<tr>
				<td data-label="ID"><span class="textmain"><?php echo $department['id'] ?></span></td>

				<td data-label="Department Name"><?php echo $department['name'] ?></td>
				<td data-label="Status"><?php echo $department['status'] ?></td>
				
				<td data-label="Action">
					<a href="editDepartmentinfo.php?id=<?php echo $department['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteDepartment.php?id=<?php echo $department['id'] ?>">
							<span class="textmain margin-left">DELETE</span></a>
						</td>
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>

   </div>

</div>

	

<?php include('footer.php');?>


</body>
</html>