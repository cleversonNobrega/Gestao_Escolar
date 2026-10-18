<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;
use CleversonUnitop\GestaoEscolar\Infrastructure\Persistence\ConnectionCreator;
use CleversonUnitop\GestaoEscolar\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
    $aStudent = new Student(null, 'Nico steppat', new DateTimeImmutable('1985-05-01'));

    $studentRepository->save($aStudent);

    $anoTherStudent = new Student(
        null,
        'Sergio',
        new DateTimeImmutable('1985-05-01')
    );

    $connection->commit();
} catch (\RuntimeException $e) {
    echo $e->getMessage();
    $connection->commit();
}
