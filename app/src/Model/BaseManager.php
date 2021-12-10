<?php

namespace App\Model;

abstract class BaseManager
{
    protected \PDO $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}