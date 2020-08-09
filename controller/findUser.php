<?php

require_once '../model.php';

if (isset($_POST['submit'])) {
	
		echo $_POST['id'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['id']);
    	require_once '../searchresult.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

