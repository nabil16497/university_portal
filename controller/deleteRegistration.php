<?php 

require_once '../model.php';

if (deleteRegistration($_GET['id'])) {
    header('Location: ../showAllRegistration.php');
}

 ?>