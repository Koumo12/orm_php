<?php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

require_once 'vendor/autoload.php';

/**
 * @throws \Doctrine\ORM\Exception\MissingMappingDriverImplementation
 * @throws \Doctrine\DBAL\Exception
 */
function getEntityManager()
{
    $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: array(__DIR__ . '/Entities'),
         isDevMode: true,
    );

    $connection = DriverManager::getConnection([
        'driver'    =>  'pdo_mysql',
        'user'      =>  'root',
        'password'  =>  '',
        'host'      =>  '127.0.0.1',
        'dbname'    =>  'ormphp',
        'port'      =>  '',
        'charset'   =>  'utf8mb4',
    ]);

    return new EntityManager($connection, $config);
}
