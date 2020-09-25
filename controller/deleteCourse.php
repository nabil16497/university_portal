<?php 

require_once '../model.php';

if (deleteCourse($_GET['id'])) {
    header('Location: ../showAllCourses.php');
}

 ?>