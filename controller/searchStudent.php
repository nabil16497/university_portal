<?php

require_once '../model.php';

$data = $_POST['search'];
searchStudent($data)
echo "<script>window.location.href='../showAllStudents.php';</script>"

?>
