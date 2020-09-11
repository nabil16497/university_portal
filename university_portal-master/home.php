<?php 
require_once 'model.php';
session_start();



if(isset($_SESSION['uname'])){
	
}

else{
	if(!empty($_POST['uname']) || !empty($_POST['pass']))
	{
		if (verify_user($_POST['uname'],$_POST['pass'])) {
			$_SESSION['uname'] = $_POST['uname'];
			echo "<script>location.href='home.php'</script>";
		}
		else{
			echo "<script>alert('username or password incorrect!')</script>";
			echo "<script>location.href='loginAdmin.php'</script>";
		}
	}

	else{
		echo "<script>location.href='loginAdmin.php'</script>";
	}
}

 ?>


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>


<?php include('header1.php');?>

<div class="main_div">
	<div class="main_internaldiv">
	<span class="red_text, textc"><h1>Welcome</h1></span>
	<br>
	<span class="textc"><h3><?php echo $_SESSION['uname'];?></h3></span>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>