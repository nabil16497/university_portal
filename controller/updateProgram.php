<?php  
require_once '../model.php';


if (isset($_POST['submit'])) {

  $data['name'] = $_POST['programname'] ;
  $data['departmentid'] = $_POST['deptid'] ;
  $data['departmentname'] = $_POST['deptname'] ;
  $data['status'] = $_POST['status'] ;


  if (updateProgram($_POST['id'], $data)) {


  	#echo "<script>alert('Student Info Sucessfully Updated.'); window.location.href='../showStudent.php?id=' . $_POST["id"]';</script>";


  	#echo 'Successfully updated!!';

  	header('Location: ../progreg.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>