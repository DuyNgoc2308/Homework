<?php
session_start();
if (isset($_SESSION["username"]) && isset($_SESSION['password'])) {
	echo "<p>Username: ".$_SESSION['username'] ."</p>";
	echo "<p>Password: ".$_SESSION['password']."</p>";
}
?>
