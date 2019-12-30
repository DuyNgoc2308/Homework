<?php
$server = "localhost";
	$user = "root";
	$password ="";
	$dbName = "homework";
	$db = new mysqli($server, $user, $password, $dbName);

	$sql = "SELECT * from users";
	$result = $db->query($sql)->fetch_all();
	// echo "string";
?>