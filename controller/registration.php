<?php  
require_once '../model.php';



if(!isset($_POST['reg-student'])){

  echo "<script>alert('Select Students'); window.location.href='registration3.php';</script>";

}


	
	if(isset($_POST['submit'])) {

  
  $regfaculty = $_POST['reg-faculty'];
  $regcourse = $_POST['reg-course'] ;
  $regsemester = $_POST['reg-semester'] ;
  


 	if (registration($_POST['reg-student'], $regfaculty, $regcourse, $regsemester)) {
  		echo "<script>alert('New Course Added to the database'); window.location.href='../registration1.php';</script>";

 	
 }
 
  else{

  
    echo "<script>alert('Unsuccessful'); window.location.href='../registration1.php';</script>"; 

 

 }
}

else{

  		echo "<script>alert('Access not allowed.'); window.location.href='../registration1.php';</script>";

  	}
 

    

?>



