<?php
$s=$_GET['usearch'];
$json=array();
require_once 'db_connect.php';
$conn = db_conn();
    $selectQuery = "SELECT * FROM `student_info` WHERE firstname LIKE '%$s%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($rows as $key => $value) {
    	echo $value['firstname'].", ".$value['lastname']." (ID- ".$value['id'].")"."<br>";
    }
   # array_push($json, $rows);

    #echo json_encode($json);
    

?>