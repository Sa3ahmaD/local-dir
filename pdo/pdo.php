<?php

$pdo = new PDO("mysql:host=localhost;dbname=students;charset=UTF8;", "root", "");

if ($pdo) {
  $statement = $pdo->prepare("SELECT COUNT(*) AS total FROM students WHERE class=1;");
  $statement->execute();
  print_r($statement->fetch(PDO::FETCH_ASSOC));
  // print_r($statement->fetch(PDO::FETCH_ASSOC)['total']);
  // print_r($statement->fetch(PDO::FETCH_NUM)[0]);
  // print_r($statement->fetch(PDO::FETCH_OBJ)->total);
  // print_r($statement->fetchColumn());
}