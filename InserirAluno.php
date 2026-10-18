<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;
use ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = (new ConnectionCreator())->createConnection();

$student = new Student(null, 'Patricia freitas', new \DateTimeImmutable('2007-01-07'));

$sqlInsert = "INSERT INTO Students (name, birth_date) VALUES(:name, :birth_date)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue('name', $student->name());
$statement->bindValue('birth_date', $student->birthDate()->format('Y-m-d'));
$statement->execute();


if ($statement->execute()) {
    echo "Aluno incluido";
}
