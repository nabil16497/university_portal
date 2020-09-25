<?php
require_once 'db_connect.php';
$conn = db_conn();
$json=array();
$selectQuery = 'SELECT * FROM `student_info` ';
try{
        $stmt = $conn->query($selectQuery);
}catch(PDOException $e){
    echo $e->getMessage();
}
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
array_push($json, $rows);
echo json_encode($json);

