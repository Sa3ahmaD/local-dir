<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$statement = $mysqli->prepare("SELECT name FROM students WHERE name LIKE ?;");
$statement->bind_param('s', $name);
$name = "%br%";
$statement->execute();

print_r($statement->get_result()->fetch_all(MYSQLI_ASSOC));

$statement->close();