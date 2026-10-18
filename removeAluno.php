<?php

use ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = (new ConnectionCreator())->createConnection();

$prepareStatement = $pdo->prepare("DELETE FROM students WHERE id = ?");
$prepareStatement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($prepareStatement->execute());
