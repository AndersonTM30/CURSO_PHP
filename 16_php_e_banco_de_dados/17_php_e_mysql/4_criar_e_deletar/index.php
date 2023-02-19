<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'itens';

$conn = new mysqli($host, $user, $pass, $database);

$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$conn->query($q);

$conn->close();

$delete = "DROP TABLE teste";

$conn->query($delete);

$conn->close();