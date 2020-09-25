<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "faculty"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/resultInfo.php';

$results = fetchAllStudentResult();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

	<?php include('header3.php');?>


	<span class="textcenter textmain"><h1>All Student Results</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
      <div class="textcenter textmain margin-bottom">
      
	</div>


   <table class="table">
     <thead>
     	 <th>Student Id</th>
		<th>Midterm Mark</th>
		<th>Finalterm Mark</th>
		<th>Total Mark</th>
		<th>Final Grade</th>
		<th>Action</th>
     </thead>
     <tbody>
     	  <?php foreach ($results as $i => $result): ?>
			<tr>
				<td data-label="ID"><abbr title="Click here to see all full details"><a href="showResult.php?id=<?php echo $result['id'] ?>"><span class="textmain"><?php echo $result['id'] ?></a></abbr></span></td>

				<td data-label="Midterm Mark"><?php echo $result['midterm_mark'] ?></td>
				<td data-label="Finalterm Mark"><?php echo $result['finalterm_mark'] ?></td>
				<td data-label="Total Mark"><?php echo $result['total_marks'] ?></td>
				<td data-label="Final Grade"><?php echo $result['final_grade'] ?></td>
				
				<td data-label="Action">
					<a href="editresultinfo.php?id=<?php echo $result['id'] ?>">
						<span class="textmain">Update</span></a>
						<a href="controller/deleteResult.php?id=<?php echo $result['id'] ?>">
							<span class="textmain margin-left">DELETE</span></a>
						</td>
			</tr>
		<?php endforeach; ?>
     </tbody>
   </table>

   </div>

</div>

<?php include('footer.php');?>

<script>
	$("search").on("keyup", function(){
		var value =$(this),val();
		$("table tr").each(function(records)){
			if(records !=0)
			{
				var id=$(this).find("td:first").text();
				if(id,indexOf(value) != 0)
				{
					$(this).hide();
				}
				else
				{
					$(this).show();
				}
			}
		}
	});
</script>
</body>
</html>