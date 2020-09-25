<?php 

if(isset($_SESSION['uname']) && $_SESSION['type'] == "faculty"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
        <li><a href="showStudentResult.php">Show Results</a>
          <div class="sub-nav-links">
            <ul>
              
            </ul>
          </div>
        </li>
        <li><a href="showFaculty.php?id=<?php echo $_SESSION['uname'] ?>"><?php echo $_SESSION['uname'];?></a>
          <li><a href="showStudentResult.php"></a></li>
          <div class="sub-nav-links">
            
      </div>
        </li>
		<li><a href="logout.php"><abbr title="Logout"><i style='font-size:24px' class='fas'>&#xf2f5;</i></abbr></a></li>
      </ul>
    </nav>
	</header>
	
	<script src="js/nav.js"></script>
</body>
</html>




		