<?php
declare(strict_types=1);

class DatabaseConnection
{
    public static function connect(): PDO
    {
        try {
            $databaseHost = "localhost";
            $databaseUser = "becode";
            $databasePassword = "becode123";
            $databaseName = "php_crud";

            $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];
            //echo 'Connected successfully';
            return new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName, $databaseUser, $databasePassword, $driverOptions);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}