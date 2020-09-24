<?php 

session_start();



if (isset($_SESSION['uname'])) {
	session_destroy();
	echo "<script>location.href='login.php'</script>";
	if(isset($_COOKIE['uname']) && isset($_COOKIE['pass']))
	{
		setcookie('uname', $_COOKIE['uname'], time()-1);
		setcookie('pass', $_COOKIE['pass'], time()-1);	
	}
}

else{
	echo "<script>location.href='login.php'</script>";
}

 ?>