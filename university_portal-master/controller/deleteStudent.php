<?php 

require_once '../model.php';

if (deleteStudent($_GET['id'])) {
    header('Location: ../showAllStudents.php');
}

 ?>