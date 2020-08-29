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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div id="logo">
			<a href="home.php"><img src="logo.png" class="logo" alt="logo"></a>
		</div>
		<nav>
     		<div class="threeline">
        		<div class="line"></div>
        		<div class="line"></div>
        		<div class="line"></div>
      		</div>
      <ul class="nav-links">
        <li><a href="studentreg.php">Registration</a></li>
		<li><a href="showAllStudents.php">Show</a></li>
		<li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
	</header>
	
	<script src="js/nav.js"></script>
</body>
</html>