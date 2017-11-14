<?php

	include "DB_connection.php";
	$new_author = $_POST["author"];
	$new_project_name = $_POST["project_name"];
	$new_project_description = $_POST["project_description"];
	$new_status = $_POST["status"];
	
	
	$sql = "INSERT INTO project_list (Projekta_ID, projekta_autors, nosaukums, Apraksts, Izveidosanas_datums, status, item_order) VALUES(NULL,'$new_author','$new_project_name','$new_project_description',NOW(),'$new_status','1')";
	$result = $mysqli->query($sql);
	
?>
