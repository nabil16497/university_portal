<?php  
require_once '../model.php';






	
	if(isset($_POST['submit'])) {

  $data['deptname'] = $_POST['deptname'] ;
  
  


 	if (addDept($data)) {
  		echo "<script>alert('New Department Added to the database'); window.location.href='../deptreg.php';</script>";

  	
 	
 }
 


  else{

  
    echo "<script>alert('Unsuccessful'); window.location.href='../deptreg.php';</script>"; 

 

 }
}

else{

  		echo "<script>alert('Access not allowed.'); window.location.href='../deptreg.php';</script>";

  	}
 

    

?>



