<?php

$pdo = new PDO("mysql:host=localhost;dbname=students;charset=UTF8;", "root", "");
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

if ($pdo) {
  $statement = $pdo->prepare("SELECT roll, name FROM students WHERE class=? AND section=?;");
  // $statement = $pdo->prepare("SELECT gender, roll, name FROM students WHERE class=? AND section=?;"); // group statement
  $statement->bindParam(1,$class,PDO::PARAM_INT); // optional
  $statement->bindParam(2,$section,PDO::PARAM_STR); // optional
  $class = 1;
  $section = 'A';
  $statement->execute(); // with parameter binding
  // $statement->execute([$class,$section]); // without parameter binding
  // print_r($statement->fetchAll(PDO::FETCH_OBJ));
  // print_r($statement->fetchAll(PDO::FETCH_OBJ)[0]->name);
  // print_r($statement->fetchAll(PDO::FETCH_NUM));
  // print_r($statement->fetchAll(PDO::FETCH_NUM)[0][1]);
  // print_r($statement->fetchAll(PDO::FETCH_ASSOC));
  // print_r($statement->fetchAll(PDO::FETCH_ASSOC)[0]['name']);
  print_r($statement->fetchAll(PDO::FETCH_KEY_PAIR));
  // print_r($statement->fetchAll(PDO::FETCH_GROUP)); // group value based on the first data
}