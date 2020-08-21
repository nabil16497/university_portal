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
	<style>
		td{
			padding: 15px;
		}
	</style>
</head>
<body>


<?php include('header1.php');?>

<div style="border:3px solid #000000;border-radius: 10px; margin-top: 10px;margin-bottom: 10px;padding: auto;">
	<div style="background-color: #e5e5e5; margin-top: 30px; margin-bottom: 30px;margin-left: auto; margin-right: auto; width: 450px ;font-size:  30px; padding: 20px; border-radius: 10px;">
	<span style="text-align: center;color: #e80000"><h1>Welcome</h1></span>
	<br>
	<span style="text-align: center;"><h3><?php echo $_SESSION['uname'];?></h3></span>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>