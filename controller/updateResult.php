<?php  
require_once '../model.php';


if (isset($_POST['submit'])) {
	$data["semester_id"] = $_POST["semester_id"];
	$data["student_id"] = $_POST["student_id"];
	$data["faculty_id"] = ($_POST["faculty_id"]);
	$data["section_id"]=$_POST["section_id"];
	$data["midterm_mark"]=$_POST["midterm_mark"];
	$data["finalterm_mark"] = $_POST["finalterm_mark"];
	$data["total_marks"] = $_POST["total_marks"];
	$data["final_grade"] = $_POST["final_grade"];
	





	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	





  if (updateResult($_POST['id'], $data)) {


  	#echo "<script>alert('Student Info Sucessfully Updated.'); window.location.href='../showStudent.php?id=' . $_POST["id"]';</script>";


  	#echo 'Successfully updated!!';

  	header('Location: ../showResult.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>