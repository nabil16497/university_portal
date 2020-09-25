<?php
session_start();
if(isset($_SESSION['uname'])){
}

else{

    echo "<script>location.href='loginAdmin.php'</script>";
}

require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style >    
  h1{
    color:red;
  }
</style>
<title> </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/web1.css">
</head>
<body>
   <?php include('header2.php');?>
  <div class="main_div">
<div class="main_internaldiv">
 
<div >  
 <div >
<main class="l1">
    
<header>
    
    <div class="call12">
     <p1>Web technology[I]</p1>
       </div>
     <div class="a0">
    <main class="l2">
         <div>
        <img src="Test.png" alt="picture of a feculty" style="width:40px;height:60px;">
        </div>
        <div>
        <p2>rashedul Islam Nabil</p2><br>
        <p3>Email:nabil@aiub.edu</p3><br>
        <p4>Feculty</p4>
        </div>

     </main>
     </div>
  
      
</header>

   <div class="a1">Time:</div>
   <div class="a2">Class Type:</div>
   <div class="a3">Room No:</div>

</main>
</div>
<div class="main">
  <div class="design">
      </div>

<div class="M3-bar ">
  <button class=" MI-button" onclick="openCity('TSF')">TSF</button>
  <button class=" MI-button" onclick="openCity('Notes')">Notes</button>
  <button class=" MI-button" onclick="openCity('Notices')">Notices</button>
</div>

<div id="TSF" class="w3-container city">
  <h2>TSF</h2>
  <p>Here will be TSF</p>
  

</div>

<div id="Notes" class="w3-container city" style="display:none">
  <h2>Notes</h2>
  <p>Here will be notes</p> 
</div>

<div id="Notices" class="w3-container city" style="display:none">
  <h2>Notices</h2>
  <p>here will be notices</p>
</div>
</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

</div>

</div>
</div>
<?php include('footer.php');?>

</body>
</html>