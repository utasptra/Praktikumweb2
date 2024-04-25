<?php
// konfigurasi DB
$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

// koneksiin
$dbh = new PDO($dsn,$user,$pass);
?>