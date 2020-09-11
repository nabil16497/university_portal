<?php 

require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $student['Surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $student['Username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateStudent" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

