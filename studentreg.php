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
	<div style="margin: auto; font-size: 15px;">
		<form>
			<table style="padding: 10px;">
				<tr>
					<td>
						First Name:
					</td>
					<td>
						<input type="text" name="firstname"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Last Name:
					</td>
					<td>
						<input type="text" name="lastname"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Date of Birth:
					</td>
					<td>
						<input type="Date" name="dob"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Gender:
					</td>
					<td>
						<input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other 
					</td>
				</tr>

				<tr>
					<td>
						Contact:
					</td>
					<td>
						<input type="text" name="contact"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Email:
					</td>
					<td>
						<input type="text" name="email"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Nationality:
					</td>
					<td>
						<select name="nationality"style="font-size: 15px;">
						<option value=""></option>	
						<option value="Bangladesh">Bangladesh</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>
						Address:
					</td>
					<td>
						<textarea name="address" rows="6" cols="50">Please Write Your Address Here-</textarea>
					</td>
				</tr>

				<tr>
					<td>
						Blood Group:
					</td>
					<td>
						<select name="blood"style="font-size: 15px;">
						<option value=""></option>	
						<option value="A+ve">A+ve</option>
						<option value="A+ve">B+ve</option>
						<option value="A+ve">AB+ve</option>
						<option value="A+ve">O+ve</option>
						<option value="A+ve">A-ve</option>
						<option value="A+ve">B-ve</option>
						<option value="A+ve">AB-ve</option>
						<option value="A+ve">O-ve</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>
						Department:
					</td>
					<td>
						<input type="text" name="department"style="font-size: 15px;">
					</td>
				</tr>

				<tr>
					<td>
						Program:
					</td>
					<td>
						
					</td>
				</tr>

			</table>
		</form>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>