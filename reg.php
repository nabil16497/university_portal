<?php 

if(isset($_SESSION['uname']) && $_SESSION['type'] == "student"){
}

else{

  echo "<script>location.href='login.php'</script>";
}

require_once 'controller/classschadule.php';
$day = fetchAllday();
?>
<!DOCTYPE html>
<html>
<head>

	<style>
    .em
    {

      margin-left: 75%;

    }
		
		.am
		{
      background-color: lightgreen;
			border-radius: 10px;
			border-style: solid;
			border-color: lightgreen;
      text-align: left;
		}
    select {
        height: 40px;
        width: 200px;
        margin-bottom: 25px;
       
    }
    
  
</style>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <?php include('header2.php');?>
 
  
   <div class="main_internaldiv textleft fontsize160">
   	<table class="table">
   		<tr>
  
   	          <div class="textcenter">
   	 	    <div class="am">
             <p>Registration</p>
        <div class="em">

   	<select class="abc" name="cars" id="cars">
   	<option value="volvo"></option>
    <option value="volvo">sem1</option>
    <option value="saab">Sem2</option>
    
      </div>
          </div>
              </div>
      </tr>
      </div>

   </div>
   <div>
     <table class="table">
        <tbody>
          <thead>
            <tr>

           <?php foreach ($day as $i => $day): ?>
            <?php endforeach; ?>
              <?php $aman= $day['coursename'] ; ?>
            <th>Course Name</th>
              
             <th>View Credit</th>
             <th>Total cost</th>
             </tr>
          </thead>
        </tbody>
        <tbody>
          <tr>
           <td data-label="Course Name"><a href="fc.php?Course Name=<?php echo $day['coursename'] ?>"> <?php echo $aman?></a><br>Start time:<?php echo $day['starttime1'] ?><br></td> 
              
                
               
           </td>
           <td data-label="View Credit">
             3<br>
            
           </td>

           <td data-label="Total expense"></td>
           </tr>
       
        </tbody>



   </div>
  
  </select>

  </table>
  </div>
</div>
</body>
<?php include('footer.php');?>

</html>