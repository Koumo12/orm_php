<?php

require_once 'vendor/autoload.php';
require_once 'bootstrap.php';

try {
    $entityManager = getEntityManager();
} catch (\Doctrine\ORM\Exception\ORMException $e) {
    echo 'Error';
}




