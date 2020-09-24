<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/facultyInfo.php';
$faculty = fetchFaculty($_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>

<span class="textcenter textmain"><h1>Edit Faculty Info</h1></span>
  <div class="textcenter">
  <div class="main_internaldiv textleft fontsize160">
    <form action="controller/updateFaculty.php" method="POST" enctype="multipart/form-data">
            <div class="image">
      <img src= '<?php echo $faculty['image']; ?>' alt="Profile Picture" class="userimage">
      </div>
      <br>

      
        <input type="file" id="file" name="file">
          <label for="file" class="filelabel" >Select</label>

        <br>        
        
        <br>

      <div class="form">
          <input value="<?php echo $faculty['firstname'] ?>" type="text" name="firstname" autocomplete="off" required />
          <label for="firstname" class="label-name">
          <span class="content-name">First Name</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $faculty['lastname'] ?>" type="text" name="lastname" autocomplete="off" required />
          <label for="lastname" class="label-name">
          <span class="content-name">Last Name</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $faculty['dob'] ?>" type="Date" name="dob" autocomplete="off" required />
          <label for="dob" class="label-name">
          <span class="content-name">Date of Birth</span>
          </label>
      </div>

      <div class="form">
          <select name="gender" required />
            <option selected><?php echo $faculty['gender'] ?></option>  
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select> 
          <label for="gender" class="label-name">
          <span class="content-name">Gender</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $faculty['contact'] ?>" type="text" name="contact" autocomplete="off" maxlength="15" size="15" required />
          <label for="contact" class="label-name">
          <span class="content-name">Contact</span>
          </label>
      </div>  

      <div class="form">
          <input value="<?php echo $faculty['email'] ?>" type="text" name="email" autocomplete="off" required />
          <label for="email" class="label-name">
          <span class="content-name">Email</span>
          </label>
      </div>

      <div class="form">
          <select name="nationality" required />
            <option selected><?php echo $faculty['nationality'] ?>"</option>
            <option value="Bangladesh">Bangladesh</option>
            </select>
          <label for="nationality" class="label-name">
          <span class="content-name">Nationality</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $faculty['address'] ?>" type="text" autocomplete="off" name="address" required />
          <label for="address" class="label-name">
          <span class="content-name">Address</span>
          </label>
      </div>

      <div class="form">
          <select name="blood" required />
            <option selected><?php echo $faculty['blood'] ?>"</option>
            <option value="A+ve">A+ve</option>
            <option value="B+ve">A+ve</option>
            <option value="AB+ve">A+ve</option>
            <option value="O+ve">A+ve</option>
            <option value="A-ve">A+ve</option>
            <option value="B-ve">A+ve</option>
            <option value="AB-ve">A+ve</option>
            <option value="O-ve">ve</option>
          </select>
          <label for="blood" class="label-name">
          <span class="content-name">Blood Group</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $faculty['dept'] ?>" type="text" name="department" autocomplete="off" required />
          <label for="department" class="label-name">
          <span class="content-name">Department</span>
          </label>
      </div>


      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <br>
      <hr>
      <input type="submit" value="submit" name="submit">

    </form>
  </div>
  
</div>
<?php include('footer.php');?>

</body>
</html>