<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$statement = $mysqli->prepare("SELECT * FROM students WHERE class=? and section=?;");
$statement->bind_param('is', $class, $section);

$class = 1;
$section = 'A';
$statement->execute();
// echo $statement->get_result()->num_rows;
$result = $statement->get_result();

// fetch data from result
// while($data = $result->fetch_assoc()) {
//   print_r($data);
// }

while($data = $result->fetch_object()) {
  print_r($data);
}

// another way of fetching data
// $data = $result->fetch_all();
// $data = $result->fetch_all(MYSQLI_ASSOC);
// print_r($data);

$statement->close();