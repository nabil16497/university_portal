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
        <li><a href="#">Registration</a>
        	<div class="sub-nav-links">
        		<ul>
        			<li><a href="studentreg.php">Student Registration</a></li>
        			<li><a href="facultyreg.php">Faculty Registration</a></li>
                    <li><a href="coursereg.php">Course Registration</a></li>
        		</ul>
        	</div>
        </li>
        <li><a href="#">Show</a>
        	<div class="sub-nav-links">
        		<ul>
        			<li><a href="showAllStudents.php">Show Students</a></li>
					<li><a href="showAllFacultys.php">Show Facultys</a></li>
				</ul>
			</div>
        </li>
		<li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
	</header>
	
	<script src="js/nav.js"></script>
</body>
</html>




		