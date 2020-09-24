<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

	<div class="child">
		<div class="father">
		<a href=""><img src="logo.png" class="logo" alt="logo textcenter"></a><br>
		<div class="main_internaldiv textcenter fontsize160 width100">

			<form action="home.php" method="post">

				<h4>Login <br><span class="lowoptext">(Faculty)</span></h2>

				<div class="form">
					<input type="text" name="uname" autocomplete="off" required />
					<label for="uname" class="label-name">
					<span class="content-name">User ID</span>
					</label>
			</div>
			<div class="form">
					<input type="Password" name="pass" autocomplete="off" required />
					<label for="password" class="label-name">
					<span class="content-name">Password</span>
					</label>
			</div>
			<input type="hidden" name="type" value="faculty">
			
			<input type="submit" name="login" value="Login"></td>
				</tr>
		</form>
		
		<a href="login.php"><button class="back">Back</button></a>

		</div>
		</div>
	</div>


</body>
</html>