<?php
session_start();

include_once("connection.php");
include_once("url.php");

$contacts = []; // Linha mantida do conflito

$query = "SELECT * FROM contacts";
$stmt = $conn->prepare($query);
$stmt->execute();
$contacts = $stmt->fetchAll();
