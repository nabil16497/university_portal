<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/departmentInfo.php';
$departments = fetchAlldepartments();


require_once 'controller/programInfo.php';
$programs = fetchAllprograms();

require_once 'model.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Program Registration</h1></span>
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createProgram.php" method="POST" enctype="multipart/form-data">

			<div class="form">
					<input type="text" name="program" autocomplete="off" required />
					<label for="progname" class="label-name">
					<span class="content-name">Program Name</span>
					</label>
			</div>

		

			<div class="form">
			<select name="deptid" id="deptid" onclick="disable()" required />
						<option selected disabled hidden></option>

                        <?php foreach ($departments as $i => $department): ?>
						<option value= <?php echo $department['id'] ?>> <?php echo $department['name'] ?> </option>		 
                    <?php endforeach; ?>
					</select> 
					<label for="dept" class="label-name">
					<span class="content-name">Department</span>
					</label>
			</div>

	
						
  			
  			<br>
			<hr>
			<input type="submit" value="submit" name="submit" >

		</form>
	</div>

</div>






<span class="textcenter textmain"><h1>Programs</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">

   <table class="table" id="table">
     <thead>
    <tr>
     	<th>ID</th>
		<th>Program</th>
		<th>Department</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody id="tablebody">
     	  <?php foreach ($programs as $i => $program): ?>
			<tr>
				<td data-label="ID"><span class="textmain"><?php echo $program['id'] ?></span></td>
				<td data-label="Program"><?php echo $program['name'] ?></td>
				<td data-label="Department"><?php $name= getdeptname($program['id']); echo $name['name'] ?> [ <?php echo $program['deptid'] ?> ]</td>
				<td data-label="Status"><?php echo $program['status'] ?></td>
				
				<td data-label="Action">
					<a href="editPrograminfo.php?id=<?php echo $program['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteProgram.php?id=<?php echo $program['id'] ?>">
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