<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

	echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

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
		.divt td,th{
			padding: 20px;
			border-radius: 10px;
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

		<table border="2px" style="text-align: center;margin: auto; font-size: 20px; border-radius: 10px;">
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
				<?php foreach ($students as $i => $student): ?>
					<tr>
						<td><abbr title="Click here to see all full details"><a href="showStudent.php?id=<?php echo $student['id'] ?>"><?php echo $student['id'] ?></a></abbr></td>

						<td><?php echo $student['firstname'] ?></td>
						<td><?php echo $student['lastname'] ?></td>
						<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
						<td><a href="editStudentinfo.php?id=<?php echo $student['id'] ?>"><span style="border: 1px solid #000000;padding: 10px; margin-right: 15px; border-radius: 5px;">Edit</span></a><a href="controller/deleteStudent.php?id=<?php echo $student['id'] ?>"><span style="border: 1px solid #000000; padding: 10px; border-radius: 5px;">Delete</span></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
	</div>
</div>

<?php include('footer.php');?>
</body>
</html>