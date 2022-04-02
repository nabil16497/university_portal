<?php 


function fetchAllprograms(){
	require_once 'model.php';
	return showAllPrograms();

}

function fetchprogram($id){
	require_once 'model.php';
	
	return showprogram($id);

}
