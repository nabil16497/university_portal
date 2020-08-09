<?php  
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
	</style>
</head>
<body>

<?php include('header1.php');?>

<div class="divt">

	<span style="text-align: center;color: #e80000"><h1>All Students</h1></span>
	<div style="margin: auto; font-size: 15px;padding: 10px;">

		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($students as $i => $student): ?>
					<tr>
						<td><a href="showStudent.php?id=<?php echo $student['id'] ?>"><?php echo $student['firstname'] ?></a></td>

						<td><?php echo $student['lastname'] ?></td>
						<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['firstname'] ?>"></td>
						<td><a href="editStudent.php?id=<?php echo $student['id'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['id'] ?>">Delete</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
	</div>
</div>

<?php include('footer.php');?>
</body>
</html>