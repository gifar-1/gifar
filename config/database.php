<?php 
	$server =  "localhost";
	$username = "root";
	$password = "";
	$database = "arkademy";

	// Koneksi dan memilih database di server
	mysql_connect($server,$username,$password) or die("");
	mysql_select_db($database) or die("");
?>