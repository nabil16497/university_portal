<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/facultyInfo.php';

$facultys = fetchAllFacultys();

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

	<?php include('header1.php');?>


	<span class="textcenter textmain"><h1>Show All Facultys</h1></span>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
      <div class="textcenter textmain margin-bottom">
      <div class="searchbox">

	<input placeholder="Enter ID to search" class="searchtext" autocomplete="off" type="text" id="search" name="search">
	</div>


   <table class="table">
     <thead>
     	 <th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Image</th>
		<th>Action</th>
     </thead>
     <tbody>
     	  <?php foreach ($facultys as $i => $faculty): ?>
			<tr>
				<td data-label="ID"><abbr title="Click here to see all full details"><a href="showFaculty.php?id=<?php echo $faculty['id'] ?>"><span class="textmain"><?php echo $faculty['id'] ?></a></abbr></span></td>

				<td data-label="First Name"><?php echo $faculty['firstname'] ?></td>
				<td data-label="Last Name"><?php echo $faculty['lastname'] ?></td>
				<td data-label="Image"><img width="100px" src="uploads/<?php echo $faculty['image'] ?>" alt="<?php echo $faculty['firstname'] ?>"></td>
				<td data-label="Action">
					<a href="editFacultyinfo.php?id=<?php echo $faculty['id'] ?>">
						<span class="textmain">EDIT</span></a>
						<a href="controller/deleteFaculty.php?id=<?php echo $faculty['id'] ?>">
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