<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);

$insert = "INSERT INTO teste (nome, sobrenome) VALUES ('Anderson', 'Ferreira')";

$conn->query($insert);

$conn->close();