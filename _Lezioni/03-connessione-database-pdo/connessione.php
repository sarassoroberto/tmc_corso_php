<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_scuola";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname,e", $username, $password);
    // set the PDO error mode to exception
    // imposta la visualizzazione degli errori del PDO come eccezioni
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
	}
catch(PDOException $e)
	{
    echo "Connection failed: " . $e->getMessage();
	}
?>
