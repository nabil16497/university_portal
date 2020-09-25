<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Show All Students</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">

	<div class="searchbox">
	<input id="search" placeholder="Enter ID to search" class="searchtext" autocomplete="off" type="text" name="search" required/>
	</div>

	<div id="searched" class="textmain"></div>
   <table class="table" id="table">
     <thead>
    <tr>
     	<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody id="tablebody">
     	  <?php foreach ($students as $i => $student): ?>
			<tr>
				<td data-label="ID"><abbr title="Click here to see all full details"><a href="showStudent.php?id=<?php echo $student['id'] ?>"><span class="textmain"><?php echo strval($student['id']) ?></a></abbr></span></td>

				<td data-label="First Name"><?php echo $student['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $student['lastname'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
				<td data-label="Action">
					<a href="editStudentinfo.php?id=<?php echo $student['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteStudent.php?id=<?php echo $student['id'] ?>">
							<span class="textmain margin-left">DELETE</span></a>
						</td>
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>

   </div>

</div>

<?php include('footer.php');?>


<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>