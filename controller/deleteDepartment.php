<?php 

require_once '../model.php';

if (deleteDepartment($_GET['id'])) {
    header('Location: ../deptreg.php');
}

 ?>