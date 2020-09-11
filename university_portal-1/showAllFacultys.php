<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

	echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/facultyInfo.php';

$facultys = fetchAllFacultys();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
 
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Show All Facultys</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
      <div class="textcenter textmain margin-bottom">
      <b>Search: </b>
      <input placeholder="Enter ID to search." type="text" name="id" required/></div>


   <table class="table">
     <thead>
     	 <th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Image</th>
		<th>Action</th>
     </thead>
     <tbody>
     	  <?php foreach ($facultys as $i => $faculty): ?>
			<tr>
				<td data-label="ID"><abbr title="Click here to see all full details"><a href="showFaculty.php?id=<?php echo $faculty['id'] ?>"><span class="textmain"><?php echo $faculty['id'] ?></a></abbr></span></td>

				<td data-label="First Name"><?php echo $faculty['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $faculty['lastname'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $faculty['image'] ?>" alt="<?php echo $faculty['firstname'] ?>"></td>
				<td data-label="Action">
					<a href="editFacultyinfo.php?id=<?php echo $faculty['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteFaculty.php?id=<?php echo $faculty['id'] ?>">
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