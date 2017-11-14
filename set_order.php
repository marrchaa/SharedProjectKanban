<?php


// including the config file
include('config.php');
$pdo = connect();

// get the list of items id separated by cama (,)
$list_order = $_POST['list_order'];
// convert the string list to an array
$list = explode(',' , $list_order);
$i = 1 ;
foreach($list as $id) {
	try {
	    $sql  = 'UPDATE project_list SET item_order = :item_order WHERE Projekta_ID = :Projekta_ID' ;
		$query = $pdo->prepare($sql);
		$query->bindParam(':item_order', $i, PDO::PARAM_INT);
		$query->bindParam(':Projekta_ID', $id, PDO::PARAM_INT);
		$query->execute();
	} catch (PDOException $e) {
		echo 'PDOException : '.  $e->getMessage();
	}
	$i++ ;
}
?>