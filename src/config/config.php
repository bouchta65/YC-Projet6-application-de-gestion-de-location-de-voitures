<?php
// Paramètres de connexion
$host = 'localhost'; 
$dbname = 'locationvoiture'; 
$username = 'root'; 
$password = '123'; 

$conn = new mysqli($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: ");
}
echo "Connected successfully!";

?>