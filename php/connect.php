<?php
$servername = "sql309.infinityfree.com";
$username = "if0_37492194";
$password = "H9e8s3w2";
$dbname = "if0_37492194_XXX";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
