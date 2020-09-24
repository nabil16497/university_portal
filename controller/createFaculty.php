<?php  
require_once '../model.php';






  $fnameerror = $lnameerror = $emailerror =  $doberror = $gendererror = $contacterror = $blooderror = $nationalityerror = $addresserror = $depterror = "";

  $pperror ="";
  $picaddress = "userdp.png";

  if(isset($_POST['submit'])) {

  if (empty($_POST["firstname"])) {
    $fnameerror = "Name can not be empty";
  } else {
    $regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
    if(!preg_match($regex, $_POST["firstname"])){
      $fnameerror = "Only letters, period and dash is allowed";
    }
    else{
      $data["firstname"] = $_POST["firstname"];
    }
  }
  
  if (empty($_POST["lastname"])) {
    $lnameerror = "Name can not be empty";
  } else {
    $regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
    if(!preg_match($regex, $_POST["lastname"])){
      $lnameerror = "Only letters, period and dash is allowed";
    }
    else{
      $data["lastname"] = $_POST["lastname"];
    }
  }

  if (empty($_POST["email"])) {
    $emailerror = "Email can not be empty";
  } else {
    $data["email"] = ($_POST["email"]);
   
    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
      $emailerror = "Invalid email format";
      $email="";
    }
  }

  if(empty($_POST["dob"])){
    $doberror = "Select your Date of Birth";
  }
  else{

    $data["dob"]=$_POST["dob"];

  }

  if (empty($_POST["gender"])) {
    $gendererror = "Select gender";
  }
  else{
    $data["gender"] = $_POST['gender'];
  }
  if(empty($_POST["contact"])){
    $contacterror = "You Must Enter Your Contact Number.";
  }
  {
  $pregx = "/^[0-9]*$/";

  if(!preg_match($pregx, $_POST["contact"]))
  {
    $contacterror="Invalid Phone Number";
  }

  else{
    $data["contact"] = $_POST["contact"];
  }
 }


  if(empty($_POST["blood"])){
    $blooderror = "Blood group can not be empty";
  }
  else{
    $data["blood"] = $_POST["blood"];
  }


   if(empty($_POST["nationality"])){
    $nationalityerror = "Select Nationality";
  }
  else{
    $data["nationality"] = $_POST["nationality"];
  }

  if(empty($_POST["department"])){
    $depterror = "Select A Department";
  }
  else{
    $data["dept"] = $_POST["department"];
  }

  if(empty($_POST["address"])){
    $addresserror = "Write Down An Address.";
  }
  else{
    $data["address"] = $_POST["address"];
  }



  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));


  $allow = array('jpg','jpeg','png');
  if(!empty($fileName)){
  if (in_array($fileActualExt, $allow)) {
    if($fileError ===0){
      if($fileSize < 4194304){
        $fileNameNew = uniqid('',true).".".$fileActualExt;
        $fileDes = '../uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDes);
        $ppm = "Image sucessfully uploaded";
        $data["image"] = $fileDes;
      }
      else{
        $pperror = "File size too large (Maximum file size- 4MB)";
      }
    }
    else{
      $pperror = "There was an error uploading your file!";
    }
  }
  else{
    $pperror = "Only images are allowed (jpeg, jpg, png)";
  }
}
  else{
    $pperror = "Please Select an image";
  }


  #$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
  $data['password'] = $_POST['password'];

  if(empty($fnameerror)&& empty($lnameerror) && empty($doberror) && empty($gendererror) && empty($contacterror)&& empty($emailerror) && empty($nationalityerror) && empty($addresserror) && empty($blooderror)&& empty($depterror) && empty($pperror))
 {

  if (addFaculty($data)) {
      echo "<script>alert('Faculty Sucessfully Registered.'); window.location.href='../facultyreg.php';</script>";

    
  
 }
 }


  else{

  $errorm = " | ".$fnameerror."  |  ".$lnameerror."  |  ".$doberror."  |  ".$gendererror."  |  ".$contacterror."  |  ".$emailerror."  |  ".$nationalityerror."  |  ".$addresserror."  |  ".$blooderror."  |  ".$depterror."  |  "." | ".$pperror." | ";
    echo "<script>alert('Error-".$errorm."'); window.location.href='../facultyreg.php';</script>"; 

 

 }
}

else{

      echo "<script>alert('Access not allowed.'); window.location.href='../facultyreg.php';</script>";

    }
 

    

?>



