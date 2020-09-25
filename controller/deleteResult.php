<?php 

require_once '../model.php';

if (deleteResult($_GET['id'])) {
    header('Location: ../showStudentResult.php');
}

 ?>