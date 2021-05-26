<?php

$dsn = 'mysql:host=localhost;dbname=uhb';
$user = 'root';
$pass = '';

$options = [
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];

try {
	$con = new PDO($dsn, $user, $pass, $options);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo 'Failed to Connect to DB ' . $e->getMessage();
}