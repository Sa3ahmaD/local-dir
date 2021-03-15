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
    $sql = "SELECT * FROM users WHERE id in (?, ?)";
    $rs = $conn->executeQuery($sql, array(1,2));
    print_r($rs->fetchAll());
    
    
    // $rs = $conn->prepare("SELECT * FROM users WHERE id =?");
    // $id = 1;
    // $rs->bindParam(1,$id);
    // $rs->bindValue(1, 1);
    // $result = $rs->execute();
    
    // print_r($result->fetchAll());
} else {
    echo "not connected";
}