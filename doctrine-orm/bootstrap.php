<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


// database configuration parameters
$conn = array(
    'dbname' => 'doctrine_orm',
    'user' => 'saleh',
    'password' => 'Saleh_ahmaD1234',
    'host' => 'localhost',
    'driver' => 'mysqli',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);