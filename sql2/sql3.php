<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$statement = $mysqli->prepare("SELECT name FROM students WHERE class=? and section IN (?,?);");
$statement->bind_param('iss', $class,$section1,$section2);
$class = 1;
$section1 = 'A';
$section2 = 'b';
$statement->execute();

print_r($statement->get_result()->fetch_all(MYSQLI_ASSOC));

$statement->close();