<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$student = new Student(null, 'Felipe Nobrega dos santos', new \DateTimeImmutable('2007-01-06'));

$sqlInsert = "INSERT INTO Students (name, birth_date) VALUES(?, ?)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));
$statement->execute();


if ($statement->execute()) {
    echo "Aluno incluido";
}
