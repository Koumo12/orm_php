<?php

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;



    $entityManage = getEntityManager();

    ConsoleRunner::createApplication(
        new SingleManagerProvider($entityManage)
    );

