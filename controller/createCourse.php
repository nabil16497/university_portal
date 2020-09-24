<?php  
require_once '../model.php';






	
	if(isset($_POST['submit'])) {

  


  $data['courseid'] = $_POST['courseid'] ;
  $data['coursename'] = $_POST['coursename'] ;
  $data['section'] = $_POST['section'] ;
  $data['credit'] = $_POST['credit'] ;
  $data['day1'] = $_POST['day1'] ;
  $data['starttime1'] = $_POST['starttime1'] ;
  $data['endtime1'] = $_POST['endtime1'] ;
  $data['day2'] = $_POST['day2'] ;
  $data['starttime2'] = $_POST['starttime2'] ;
  $data['endtime2'] = $_POST['endtime2'] ;
  $data['room1'] = $_POST['room1'] ;
  $data['room2'] = $_POST['room2'] ;
  


 	if (addCourse($data)) {
  		echo "<script>alert('New Course Added to the database'); window.location.href='../coursereg.php';</script>";

  	
 	
 }
 


  else{

  
    echo "<script>alert('Unsuccessful'); window.location.href='../coursereg.php';</script>"; 

 

 }
}

else{

  		echo "<script>alert('Access not allowed.'); window.location.href='../coursereg.php';</script>";

  	}
 

    

?>



