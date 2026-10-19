<?php

use CleversonUnitop\GestaoEscolar\Infrastructure\Persistence\ConnectionCreator;
use CleversonUnitop\GestaoEscolar\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::CreateConnection();
$repository = new PdoStudentRepository($connection);

$studentList = $repository->studetsWithPhones();

echo $studentList[1]->phones()[0]->formattedPhone();

var_dump($studentList);
