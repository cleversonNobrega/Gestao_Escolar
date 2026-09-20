<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$student = new Student(null, 'Felipe Nobrega dos santos', new \DateTimeImmutable('2007-01-06'));

$sqlInset = "INSERT INTO Students (name, birth_date) VALUES('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInset));
