<?php 
require_once 'model.php';

session_start();

 if  (isset($_SESSION['uname'])) 
    {
	echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
	echo "<a href='product.php'>Product</a><br>";
	echo "<br><a href='logout.php'>Logout</a><br>";
    }

else{
	if(!empty($_POST['uname']) || !empty($_POST['pass']))
	    {
		if (login_verify($_POST['uname'],$_POST['pass'])) {
			$_SESSION['uname'] = $_POST['uname'];
			echo "<script>location.href='welcome.php'</script>";
		}
		
	else{
			echo "<script>alert('incorrect!')</script>";
			echo "<script>location.href='login.php'</script>";
		}
	}

else{
		echo "<script>location.href='login.php'</script>";
	}
}

 ?>

  <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		td{
			padding: 15px;
		}
	</style>
</head>
<body>


<?php include('header1.php');?>

	<span style="text-align: center;color: blue;">

	<h1>Student Profile</h1>
	<h3>Student ID:<?php echo $_SESSION['uname'];?></h3></span>
	
<?php include('footer.php');?>

</body>
</html>

 