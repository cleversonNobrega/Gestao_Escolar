<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');

$studentList = $statement->fetchAll(PDO::FETCH_ASSOC);
$students = [];

foreach ($studentList as $studentData) {
    $studentList[] = new Student($studentData['id'], $studentData['name'], new DateTimeImmutable($studentData['birth_date']));
}

var_dump($studentList);
