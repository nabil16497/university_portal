<?php 

require_once '../model.php';

if (deleteProgram($_GET['id'])) {
    header('Location: ../progreg.php');
}

 ?>