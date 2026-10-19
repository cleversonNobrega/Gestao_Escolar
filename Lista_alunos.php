<?php

use CleversonUnitop\GestaoEscolar\Infrastructure\Persistence\ConnectionCreator;
use CleversonUnitop\GestaoEscolar\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);
