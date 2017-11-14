<?php

function connect() {
	$host = 'localhost';
	$db_user = 'root';
	$db_password = 'usbw';
	$db_name = '2160870_sharedprojects';
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND));
}

?>