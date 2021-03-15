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

$qb = $conn->createQueryBuilder();
if ($conn->connect()) { 
    // $qb->select('*')->from('users');
    // $result = $qb->execute()->fetchAll();
    // print_r($result);
    
    
    /*conditional query using query builder */
    // $qb->select('*')->from('users')->where('id=?')->setParameter(1,2);
    // $result = $qb->execute()->fetchAll();
    // print_r($result);
    
    /* JOIN query builder */
    
    // $qb->select('s.*')->from('status', 's')->join('s','friends','f', 's.user_id = f.friend_id and f.user_id = ?')->setParameter(1,1)->orderBy('s.user_id','DESC');
    // $result = $qb->execute()->fetchAll();
    // // print_r($qb->getSQL());
    // print_r($result);
    
    /*insert data using query builder */
    // $qb->insert('users')->values(['name'=> '?', 'email'=> '?', 'password'=> '?'])->setParameter(1, 'saleh saleh')->setParameter(2, 'saleh@saleh.com')->setParameter(3, 'salehsaleh');
    // $result = $qb->execute();
    
    /*update data using query builder */
    // $qb->update('users')->set('email','?')->where('id=?')->setParameter(1,'saleh1@saleh.com')->setParameter(2, 10)->execute();
    
    /*delete data using query builder */
    $qb->delete('users')->where('id=?')->setParameter(1,10)->execute();
} else {
    echo "not connected";
}