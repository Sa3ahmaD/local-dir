<?php

require "vendor/autoload.php";

$connectionParams = array(
    'dbname' => 'cms',
    'user' => 'saleh',
    'password' => 'Saleh_ahmaD1234',
    'host' => 'localhost',
    'driver' => 'mysqli',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

if ($conn->connect()) { 
    $query = "select * from users";
    $data = $conn->fetchAllAssociative($query); // for all users
    $data = $conn->fetchAssociative($query); // for single user
    print_r($data);
} else {
    echo "not connected";
}