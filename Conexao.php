<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $caminhoBanco);

echo 'Conectei';
