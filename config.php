<?php
session_start();
$dbHost = 'localhost';
$dbName = 'test';
$dbUsername = 'root';
$dbPassword = 'root';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
?>
 