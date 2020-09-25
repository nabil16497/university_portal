<?php 

session_start();
if(isset($_SESSION['uname']) && $_SESSION['type'] == "admin"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/resultInfo.php';
$result = fetchResult($_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<?php include('header1.php');?>

<span class="textcenter textmain"><h1>Edit Student Result</h1></span>
  <div class="textcenter">
  <div class="main_internaldiv textleft fontsize160">
    <form action="controller/updateResult.php" method="POST" enctype="multipart/form-data">

      

      <div class="form">
          <input value="<?php echo $result['semester_id'] ?>" type="text" name="semester_id" autocomplete="off" required />
          <label for="semester_id" class="label-name">
          <span class="content-name">Semester Id</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $result['student_id'] ?>" type="text" name="student_id" autocomplete="off" required />
          <label for="student_id" class="label-name">
          <span class="content-name">Student Id</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $result['faculty_id'] ?>" type="text" name="faculty_id" autocomplete="off" required />
          <label for="faculty_id" class="label-name">
          <span class="content-name">Faculty Id</span>
          </label>
      </div>
      

          <div class="form">
          <input value="<?php echo $result['section_id'] ?>" type="text" name="section_id " autocomplete="off" required />
          <label for="section_id " class="label-name">
          <span class="content-name">Section Id</span>
          </label>
      </div>

    <div class="form">
          <input value="<?php echo $result['midterm_mark'] ?>" type="text" name="midterm_mark" autocomplete="off" required />
          <label for="midterm_mark" class="label-name">
          <span class="content-name">Midterm Mark</span>
          </label>
      </div>

      

      <div class="form">
          <input value="<?php echo $result['finalterm_mark'] ?>" type="text" autocomplete="off" name="finalterm_mark" required />
          <label for="finalterm_mark" class="label-name">
          <span class="content-name">Finalterm Mark</span>
          </label>
      </div>


      <div class="form">
          <input value="<?php echo $result['total_marks'] ?>" type="text" name="total_marks" autocomplete="off" required />
          <label for="total_marks" class="label-name">
          <span class="content-name">Total Mark</span>
          </label>
      </div>

      <div class="form">
          <input value="<?php echo $result['final_grade'] ?>" type="text" name="final_grade" autocomplete="off" required />
          <label for="final_grade" class="label-name">
          <span class="content-name">Final Grade</span>
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