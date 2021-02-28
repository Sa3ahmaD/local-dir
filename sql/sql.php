<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');

$connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$query = "SELECT section, class FROM students";
$result = $connection->query($query);
$_students = [];
// print_r($row);

$roll = '';
$class = '';
$section = '';
$updateRollSt = $connection->prepare("UPDATE `students` SET `roll` = {$roll} WHERE class={$class} and section=`{$section}`;");
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $class = $row['class'];
    $section = $row['section'];
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);    
    // echo $updateRoll."<br>";
    printf("%d:%s:%d<br>",$row['class'],$row['section'],$roll);  
    // $updateRoll = "UPDATE `students` SET `roll` = {$roll} WHERE class={$row['class']} and section='{$row['section']}';";  
    $updateRollSt->execute();
  }
}

// $connection->query($updateRoll);



// $connection->close();