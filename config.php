<?php


$host = 'localhost';
$dbname = 'short_url';
$user = 'root';
$password = '';

$dbc = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {
    $dba = new PDO($dbc, $user, $password);
    $dba-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}