<?php
use Shop\Model\User;
require "bootstrap.php";

$usersRepository = $entityManager->getRepository(User::class);
$users = $usersRepository->findAll();

foreach ($users as $user) {
    echo "User Name: ". $user->getName(). "\n";
    foreach ($user->getProducts() as $product) {
         echo $product->getName() .",";
    }
    echo "\n";
}