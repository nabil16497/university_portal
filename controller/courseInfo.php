<?php 

require_once 'model.php';

function fetchAllcourses(){
	return showAllCourses();

}
function fetchcourse($id){
	return showCourse($id);

}
