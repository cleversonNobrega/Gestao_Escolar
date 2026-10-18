<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$student = new Student(null, 'Patricia freitas', new \DateTimeImmutable('2007-01-07'));

$sqlInsert = "INSERT INTO Students (name, birth_date) VALUES(:name, :birth_date)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue('name', $student->name());
$statement->bindValue('birth_date', $student->birthDate()->format('Y-m-d'));
$statement->execute();


if ($statement->execute()) {
    echo "Aluno incluido";
}
