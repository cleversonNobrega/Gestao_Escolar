<?php

class ConnectionCreator
{
    public function createConnection(): \PDO
    {
        $databasePath = __DIR__ . '/../../banco.sqlite';
        return new PDO(dsn: 'sqlite:' . $databasePath);
    }
}
