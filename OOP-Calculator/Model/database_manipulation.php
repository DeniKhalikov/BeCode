<?php

function openconnection(): PDO

{
    $dbhost = "localhost";
    $dbuser = "deni";
    $dbpass = 'deni';
    $db = "price_calculator_db";

    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}

function getAllProductInfo(): array
{
    $pdo = openConnection();
    // Getting product price and name to be displayed in the view
    $handle = $pdo->prepare('SELECT id, name, price FROM product');
    $handle->execute();
    $array = $handle->fetchAll();
    $products = [];
    foreach ($array as $item) {
        $products[] = new Product((int)$item['id'], $item['name'], (int)$item['price']);
    }
    return $products;
}