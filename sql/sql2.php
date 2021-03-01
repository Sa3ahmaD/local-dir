<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'students');

$connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$con_prepare = $connection->prepare("INSERT INTO newstudents(name,gender,roll,class,section) VALUES(?,?,?,?,?);");
$con_prepare->bind_param('ssiis', $name, $gender, $roll, $class, $section);

$data = array_map('str_getcsv', file('./babynames-clean.csv'));
shuffle($data);
$_students = [];
$sections = ['A','B','C','D'];

for($i = 0; $i < 1000; $i++) {
  $name = $data[$i][0];
  $gender = $data[$i][1] == 'boy' ? 'M': 'F';
  $section = $sections[array_rand($sections)];
  $class = rand(1,10);
  $_students["{$class}{$section}"][] = 1;
  $roll = count($_students["{$class}{$section}"]);
  $con_prepare->execute();
}