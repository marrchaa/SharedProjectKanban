<?php
//update.php
$connect = mysqli_connect("localhost", "root", "usbw", "2160870_sharedproject");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
 $query = "
 UPDATE project_list 
 SET item_order = '".$i."' 
 WHERE Projekta_ID = '".$_POST["page_id_array"][$i]."'";
 mysqli_query($connect, $query);
}

?>