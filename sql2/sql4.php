<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$statement = $mysqli->prepare("SELECT count(*) as total FROM students WHERE class=? and section=?;");
$statement->bind_param('is', $class,$section);
$class = 1;
$section = 'A';
$statement->execute();

print_r($statement->get_result()->fetch_assoc());

$statement->close();