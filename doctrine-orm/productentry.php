<?php

use Shop\Model\Product;
use Shop\Model\User;

require "bootstrap.php";

$user = $entityManager->find(User::class,1);
$newProductName = "GpU 4gb";

$product = new Product;
$product->setName($newProductName);
$product->setUser($user);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";