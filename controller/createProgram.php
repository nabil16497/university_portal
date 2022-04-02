<?php  
require_once '../model.php';






	
	if(isset($_POST['submit'])) {

  


  $data['name'] = $_POST['program'] ;
  $data['deptid'] = $_POST['deptid'] ;
  require_once 'departmentInfo.php';
  $departments = fetchdepartment($_POST['deptid']); 
  


 	if (addProgram($data)) {
  		echo "<script>alert('New Program Added to the database'); window.location.href='../progreg.php';</script>";

  	
 	
 }
 


  else{

  
    echo "<script>alert('Unsuccessful'); window.location.href='../progreg.php';</script>"; 

 

 }
}

else{

  		echo "<script>alert('Access not allowed.'); window.location.href='../progreg.php';</script>";

  	}
 

    

?>



