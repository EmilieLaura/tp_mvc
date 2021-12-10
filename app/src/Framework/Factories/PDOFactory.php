<?php

namespace App\Framework\Factories;

class PDOFactory
{
    private static string $host = 'mysql:host=db;dbname=php_mvc';
    private static string $username = 'root';
    private static string $password = 'password';

    public static function getMysqlConnection(): \PDO
    {
        return new \PDO(self::$host, self::$username, self::$password);
    }
}