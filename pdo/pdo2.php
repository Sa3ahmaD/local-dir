<?php

$pdo = new PDO("mysql:host=localhost;dbname=students;charset=UTF8;", "root", "");
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

if ($pdo) {
  $statement = $pdo->prepare("SELECT * FROM students WHERE class=1;");
  $statement->execute();
  // print_r($statement->fetchAll(PDO::FETCH_OBJ));
  // print_r($statement->fetchAll(PDO::FETCH_OBJ)[0]->name);
  // print_r($statement->fetchAll(PDO::FETCH_NUM));
  // print_r($statement->fetchAll(PDO::FETCH_NUM)[0][1]);
  // print_r($statement->fetchAll(PDO::FETCH_ASSOC));
  // print_r($statement->fetchAll(PDO::FETCH_ASSOC)[0]['name']);
  print_r($statement->fetchAll());
}