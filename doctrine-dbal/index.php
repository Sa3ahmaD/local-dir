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
    // echo "connected";
    // print_r($conn);
    
    $sql = "SELECT * FROM users WHERE id = '5'";
    // $rs = $conn->query($sql);
    $rs = $conn->executeQuery("SELECT * FROM users WHERE id = ?", [3]);
    print_r( $rs->fetch());
} else {
    echo "not connected";
}