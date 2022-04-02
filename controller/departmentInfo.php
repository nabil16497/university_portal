<?php 


function fetchAlldepartments(){
	require_once 'model.php';
	return showAllDepartments();

}

function fetchdepartment($id){
	require_once '../model.php';
	
	return showDepartment($id);

}
function fetchdepartmentedit($id){
	require_once 'model.php';
	
	return showDepartment($id);

}
