<?php
session_start();
if(isset($_SESSION['uname'])){
}
else
{
    echo "<script>location.href='loginAdmin.php'</script>";
}


require_once 'controller/classschadule.php';
$ama= fetchAllday();
$amaa=fetchAllday1();/*For 3rd output*/
$amaaa=fetchAllday2();/*For 2nd output*/
$amaaaa=fetchAllday3();/*For 4th output*/
$amaaaaa=fetchAllday4();
$amaaaaaa=fetchAllday5();
$amaaaaaaa=fetchAllday6();
$amaaaaaaaa=fetchAllday7();
?>
<!DOCTYPE html>
<html>
<head>


<title> </title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
   <?php include('header2.php');?>
   <span class="textcenter textmain"><h1>Course Schedule</h1></span>
   <div class="textcenter">
   <div class="main_internaldiv textleft fontsize160">

<main>	
    <div>
    








    <?php
    $s1=time();
    $s2=date("d-M-Y",$s1);
    ?>

    <table class ="table">
    <tr> 
    <th><?php echo"$s2"?></th>
    </tr>
    </table>

    </div>

    <div> 
         <table class="table">
         <tbody>
          <?php foreach ($ama as $i => $day): ?>
            <tr>              
               <?php $aman= $day['coursename'] ; ?>
               <th>Course Name:</th><br>
               <td data-label="Course Name"><a href="fc.php?Course Name=<?php echo $day['coursename'] ?>"> <?php echo $aman?></a></td> 
            </tr>
             <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day1'] ?></td>  
            </tr>    
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr> 
            <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr> 
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room1'] ?></td>
            </tr>

         <?php endforeach; ?>
        <?php foreach ($amaaa as $i => $day): ?>
            <tr>              
               <?php $aman= $day['coursename'] ; ?>
               <th>Course Name:</th><br>
               <td data-label="Course Name"><a href="A.php?Course Name=<?php echo $day['coursename'] ?>"> <?php echo $aman?></a></td> 
            </tr>
             <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day1'] ?></td>  
            </tr>    
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr> 
            <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr> 
             <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room1'] ?></td>
            </tr> 

         <?php endforeach; ?>
       </tbody>
     </table>
    </div>
  <div class ="table">
  











    <?php
    $s1=time();
    $s2=strtotime("+1day");
    $s3=date("d-M-Y",$s2);
    ?>
    <table class="table">
    <tr> 
    <th><?php echo"$s3"?></th><br>
    </tr>
    </table>
  </div>
  <div class="item9"> 
    <table class="table">
      <tbody class ="table">
         <?php foreach ($amaaaaa as $i => $day): ?>
             
               <?php $aman123= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="web.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman123 ?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day1'] ?></td>  
            </tr>   
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room1'] ?></td>
            </tr>
        <?php endforeach; ?>



<?php foreach ($amaaaaaa as $i => $day): ?>
             
               <?php $aman123= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="EM.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman123 ?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day1'] ?></td>  
            </tr>   
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room1'] ?></td>
            </tr>
        <?php endforeach; ?>

         </tbody>
      </table>
    </div>
    <div class="table"> 












   <?php
    $s1=time();
    $s2=strtotime("+2day");
    $s3=date("d-M-Y",$s2); 
    ?>
    <table class="table">
    <tr> 
    <th><?php echo"$s3"?></th><br>
    </tr>
    </table>
    </div>

  <div class="item9"> 
    <table class="table">
      <tbody class ="table"> 
          <?php foreach ($amaa as $i => $day): ?>
            <tr>
               <?php $aman= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="fc.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day2'] ?></td>  
            </tr>   
           
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
             <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room2'] ?></td>
            </tr>
            <?php endforeach; ?>
         <?php foreach ($amaaaa as $i => $day): ?>
            <tr>

               <?php $aman= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="A.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day2'] ?></td>  
            </tr>   
           
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
             <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
             <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room2'] ?></td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
    </div>
    <div class="item9"> 
   

















   <?php
    $s1=time();
    $s2=strtotime("+3day");
    $s3=date("d-M-Y",$s2);
    ?>
     <table class="table">
    <tr> 
    <th><?php echo"$s3"?></th><br>
    </tr>
    </table>
    </div>

    <div class="item9"> 
    <table class="table">
      <tbody class ="table"> 
          <?php foreach ($amaaaaaaa as $i => $day): ?>
            <tr>

               <?php $aman= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="EM.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day2'] ?></td>  
            </tr>   
           
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
             <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room2'] ?></td>
            </tr>
            <?php endforeach; ?>
         <?php foreach ($amaaaaaaaa as $i => $day): ?>
            <tr>

               <?php $aman= $day['coursename'] ; ?>
                <th>Course Name:</a></th><br>
                <td data-label="Course Name "><a href="web.php?Course Name=<?php echo $day['coursename'] ?>"><?php echo $aman?></a></td>              
            </tr>
            <tr>          
                <th class=l1>Day:</th><br>
                <td data-label="Day"><?php echo $day['day2'] ?></td>  
            </tr>              
            <tr>
                <th class=l1>Start time:</th>
                <td data-label="Start time"><?php echo $day['starttime1'] ?></td>
            </tr>
             <tr>
                <th class=l1>End time:</th>
                <td data-label="Start time"><?php echo $day['endtime1'] ?></td>
            </tr>
            <tr>
                <th class=l1>Room No:</th>
                <td data-label="Start time"><?php echo $day['room2'] ?></td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
    </div>

   </main>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>