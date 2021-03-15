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
    /* insert data */
    
    // $conn->insert('users', ['name'=> 'babu 1', 'email'=> 'babu1@babu.com', 'password'=> 'babubabu']);
    // echo $conn->lastInsertId();
    
    /* Update data */
    // $conn->executeUpdate('update users set email=? where id=?', ['babu_1@babu.com', 7]);
    // $conn->update('users', ['name'=> 'Babu'],['id'=>7]);
    
    /* Delete Data */
    $conn->delete('users', [ 'id'=> 9]);
} else {
    echo "not connected";
}