<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$query = "SELECT id, section, class FROM students";
$result = mysqli_query($connection, $query);
$_students = [];
// print_r($row);

// $roll = '';
// $class = '';
// $section = '';
$queries = '';
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    // print_r($row);
    $id = $row['id'];
    $class = $row['class'];
    $section = $row['section'];
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);
    // printf("%d:%s:%d<br>",$row['class'],$row['section'],$roll);
    $queries .= "UPDATE `students` SET `roll`={$roll} WHERE id={$id};";
    // print_r($queries);
    echo "<br>";
    mysqli_multi_query($connection, $queries);
    // $updateRollSt->execute();
  }
}