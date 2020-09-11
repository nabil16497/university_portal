<?php 

require_once '../model.php';

if (deleteFaculty($_GET['id'])) {
    header('Location: ../showAllFaculty.php');
}

 ?>