<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
</head>
<body>

			<div>
				<b>###########</b>
				<hr>
				
					<button>______________</button>
						<ul>
							<li><a href="">________</a></li>
							<li><a href="">_______</a></li>
							<li><a href="">___________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">___________</a></li>
					</ul>
				
				<button>______________</button>
						<ul>
							<li><a href="">________</a></li>
							<li><a href="">_______</a></li>
							<li><a href="">___________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">___________</a></li>
					</ul>
					<button>______________</button>
						<ul>
							<li><a href="">________</a></li>
							<li><a href="">_______</a></li>
							<li><a href="">___________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">__________</a></li>
							<li><a href="">___________</a></li>
					</ul>
					<button>______________</button>
					<ul>
						<li><a href="">________</a></li>
						<li><a href="">_______</a></li>
						<li><a href="">___________</a></li>
						<li><a href="">__________</a></li>
						<li><a href="">__________</a></li>
						<li><a href="">___________</a></li>
					</ul>

			
				
			</div>


</body>
</html>