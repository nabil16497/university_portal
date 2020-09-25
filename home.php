<?php 
require_once 'model.php';
session_start();



if(isset($_SESSION['uname'])){
	
}

else{
	if(!empty($_POST['uname']) || !empty($_POST['pass']))
	{
		if(isset($_POST['remember']))
		{
			setcookie('uname', $_POST['uname'], time()+60*60*10);
			setcookie('pass', $_POST['pass'], time()+60*60*10);	
		}
		
		if(verify_user($_POST['uname'],$_POST['pass'],$_POST['type'])) {
			$_SESSION['uname'] = $_POST['uname'];
			$_SESSION['type'] = $_POST['type'];
			echo "<script>location.href='home.php'</script>";
		}
		else{
			echo "<script>alert('username or password incorrect!')</script>";
			echo "<script>location.href='login.php'</script>";
			setcookie('uname', $_COOKIE['uname'], time()-1);
			setcookie('pass', $_COOKIE['pass'], time()-1);	
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>


<?php
if($_SESSION['type'] == "admin")
{
	include('header1.php');
}
elseif($_SESSION['type'] == "student"){
	include('header2.php');
}
elseif($_SESSION['type'] == "faculty"){
	include('header3.php');	
}
?>


<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
<span class="textcenter textmain">
	<h1>Welcome</h1></span>
<br>
<span class="textcenter textmain"><h3><?php echo $_SESSION['uname'];?></h3></span>
</div>
<div></div>

<?php include('footer.php');?>

</body>
</html>