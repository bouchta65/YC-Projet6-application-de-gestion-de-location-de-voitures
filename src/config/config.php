<?php
// Paramètres de connexion
$host = 'localhost'; 
$dbname = 'locationvoiture'; 
$username = 'root'; 
$password = '123'; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

?>