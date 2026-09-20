<?php

use CleversonUnitop\GestaoEscolar\Domain\model\Student;


require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);


$statement = $pdo->query('SELECT * FROM students');
$studentList = $statement->fetchAll(PDO::FETCH_CLASS, Student::class);

var_dump($studentList);

// echo $studentList[0][0];
