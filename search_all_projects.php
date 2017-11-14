<?php

	
	$sql = "SELECT Projekta_ID, projekta_autors, nosaukums, Apraksts, Izveidosanas_datums FROM projekti";
	$result = $mysqli->query($sql);
	
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	echo "Projekta_ID: " . $row["Projekta_ID"]. "<br>"."  projekta autors: " . $row["projekta_autors"]."<br>". "  nosaukums: " . $row["nosaukums"]."<br>"." Apraksts:". $row["Apraksts"]."<br>"." Izveidosanas datums: ".$row["Izveidosanas_datums"]."<br>"." " ."<br>";
	}
	} else {
	echo "0 results";
	}
	
?>