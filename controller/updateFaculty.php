<?php  
require_once '../model.php';


if (isset($_POST['submit'])) {
	$data["firstname"] = $_POST["firstname"];
	$data["lastname"] = $_POST["lastname"];
	$data["email"] = ($_POST["email"]);
	$data["dob"]=$_POST["dob"];
	$data["gender"]=$_POST["gender"];
	$data["contact"] = $_POST["contact"];
	$data["nationality"] = $_POST["nationality"];
	$data["dept"] = $_POST["department"];
	$data["address"] = $_POST["address"];





	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allow = array('jpg','jpeg','png');
	if(!empty($fileName)){
	if (in_array($fileActualExt, $allow)) {
		if($fileError ===0){
			if($fileSize < 4194304){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDes = '../uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				$ppm = "Image sucessfully uploaded";
				$data["image"] = $fileDes;
			}
			else{
			}
		}
		else{
			}
	}
	else{
		
	}
}
	else{
		
	}






  if (updateFaculty($_POST['id'], $data)) {


  	#echo "<script>alert('Student Info Sucessfully Updated.'); window.location.href='../showStudent.php?id=' . $_POST["id"]';</script>";


  	#echo 'Successfully updated!!';

  	header('Location: ../showFaculty.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>