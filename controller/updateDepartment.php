<?php  
require_once '../model.php';


if (isset($_POST['submit'])) {

  $data['departmentname'] = $_POST['departmentname'] ;
  $data['status'] = $_POST['status'] ;
 
 

  if (updateDepartment($_POST['id'], $data)) {


  	#echo "<script>alert('Student Info Sucessfully Updated.'); window.location.href='../showStudent.php?id=' . $_POST["id"]';</script>";


  	#echo 'Successfully updated!!';
    if($_POST['status']==0){
    $programs = showProgramdeptW($_POST['id']);
    foreach ($programs as $i => $program):

      $datap['name'] = $programs['name'] ;
      $datap['departmentid'] = $programs['deptid'] ;
      $datap['departmentname'] = $programs['deptname'] ;
      $datap['status'] = $_POST['status'] ;

      if(updateProgram($programs['id'], $datap)){}
      else{}
		endforeach;
  }
  	header('Location: ../deptreg.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}




?>