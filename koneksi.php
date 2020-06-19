<?php 
	
	
	$dbhost = "localhost";
	$dbname = "db-utssitimarlina2";
	$dbuser = "root";
	$dbpass = "";

	$koneksi = new PDO ("mysql:host=".$dbhost.";
							dbname=".$dbname. "",
							 $dbuser, $dbpass);

 ?>