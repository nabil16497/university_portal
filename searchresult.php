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

	<style>
		.divt{
			border:3px solid #000000;
			border-radius: 10px; 
			margin-top: 10px;
			margin-bottom: 10px;
			padding: auto;
		}
		.divt a{
			color: #0000ff;
		}
	</style>
</head>
<body>

<?php include('header1.php');?>

<div class="divt">

	<span style="text-align: center;color: #e80000"><h1>All Students</h1></span>

	<form method="post" action="controller/findUser.php" style="text-align: center;">
      
      <span style="color: #0000ff;"><b>Search: </b></span><input placeholder="Enter the ID to search." type="text" name="id" required/>
      <input type="submit" name="submit" value="submit"/>
    </form>

    <br>
	<div style="margin: auto; font-size: 15px;padding: 10px;">

		<table border="2px" style="text-align: center;margin: auto; font-size: 20px;">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allSearchedUsers as $i => $user): ?>
					<tr>
						<td><abbr title="Click here to see all full details"><a href="showStudent.php?id=<?php echo $student['id'] ?>"><?php echo $student['id'] ?></a></abbr></td>

						<td><?php echo $student['firstname'] ?></td>
						<td><?php echo $student['lastname'] ?></td>
						<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
						<td><a href="editStudentinfo.php?id=<?php echo $student['id'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['id'] ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
	</div>
</div>

<?php include('footer.php');?>
</body>
</html>




