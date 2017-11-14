<?php
	include "DB_connection.php";
	$new_author = $_GET["author"];
	$new_project_name = $_GET["project_name"];
	$new_project_description = $_GET["project_description"];
	
	echo"<h2>Trying to add a new project $new_author,$new_project_name , $new_project_description </h2>";
	
	$sql = "INSERT INTO project_list (Projekta_ID, projekta_autors, nosaukums, Apraksts,Izveidosanas_datums) VALUES(NULL,'$new_author','$new_project_name','$new_project_description',NOW())";
	$result = $mysqli->query($sql);
	
	include "search_all_projects.php";

?>
<a href="index.php"><button>Atgriezties uz sākumu lapu</button></a>