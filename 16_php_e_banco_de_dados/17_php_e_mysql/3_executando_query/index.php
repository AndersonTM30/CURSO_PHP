<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);

$query = "SELECT * FROM users;";

$result = $conn->query($query);

print_r($result);

$conn->close();
