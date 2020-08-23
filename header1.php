<?php 
if(isset($_SESSION['uname'])){
}

else{

	echo "<script>location.href='loginAdmin.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
	<header>
		<div id="logo">
			<a href="home.php"><img src="logo.png" style="height: 80px" alt="logo"></a>
		</div>
		<ul id="nav">
			<li style="border-right: 1px solid #000000;"><a href="studentreg.php">Registration</a></li>
			<li style="border-right: 1px solid #000000;"><a href="showAllStudents.php">Show</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>
	

</body>
</html>