<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Show All Students</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
   <table class="table">
     <thead>
    <tr>
     	<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
     </thead>
     <tbody id="tablebody">
     	  
     </tbody>
   </table>

   </div>

</div>

<?php include('footer.php');?>

<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url:'showModel.php',
			type:'GET',
			sucess:function(response){
				var data = JSON.parse(response);
				$("#data").append("<h1>"+data[i].id+"</h1>");
				for(i in data){
					$("#tablebody").append(
						"<tr><td data-label="ID"><abbr title='Click here to see all full details'><a href ='showStudent.php?id="+data[i].id+"'><span class='textmain'>"+data[i].id+"</a></abbr></span></td><td data-label='First Name'>"+data[i].firstname+"</td><td data-label='Last Name'>"+data[i].lastname+"</td><td data-label='Image'><img width='100px' src='uploads/"+data[i].image+"' alt='"+data[i].firstname+"'></td><td data-label='Action'><a href='editStudentinfo.php?id="+data[i].id+"><span class='textmain'>EDIT</span></a><a href='controller/deleteStudent.php?id='"+data[i].id+"'><span class='textmain margin-left'>DELETE</span></a></td></tr>"
					);	
				}
				
			}
		});
	});
</script>

</body>
</html>