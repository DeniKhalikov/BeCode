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
    $handle = $pdo->prepare('SELECT * FROM product');
    $handle->execute();
    $array = $handle->fetchAll();
    $products = [];
    foreach ($array as $item) {
        $products[] = new Product((int)$item['id'], $item['name'], (int)$item['price']);
    }
    return $products;
}

function getAllCustomerInfo(): array
{
    $pdo = openConnection();
    // Getting product price and name to be displayed in the view
    $handle = $pdo->prepare('SELECT * FROM customer');
    $handle->execute();
    $array = $handle->fetchAll();
    $customers = [];
    foreach ($array as $customer)
    {
        $group_id = $customer['group_id'];
        $handle = $pdo->prepare('SELECT * FROM customer_group WHERE id = :id');
        $handle->bindValue('id', $group_id);
        $handle->execute();
        $group = $handle->fetch();
        $groupObject = new Group((int)$group['id'],(int)$group['parent_id'],(int)$group['fixed_discount'],(int)$group['variable_discount'],(string)['name']);

        $customers[] = new Customer((int)$customer['id'],$groupObject, (int)$customer['fixed_discount'],(int)$customer['variable_discount'], (string)$customer['firstname'], (string)$customer['lastname']);
    }

    

    return $customers;
}

function getAllGroupInfo(): array
{
    $pdo = openConnection();
    // Getting product price and name to be displayed in the view
    $handle = $pdo->prepare('SELECT * FROM customer_group');
    $handle->execute();
    $array = $handle->fetchAll();
    $groups = [];
    foreach ($array as $group)
    {

        // int $id, int $parentId, int $fixedDiscount, int $variableDiscount, string $name)
        $groups[] = new Group((int)$group['id'],(int)$group['parent_id'],(int)$group['fixed_discount'],(int)$group['variable_discount'], (string)$group['name']); // name is NOT AN INT DENI pls.
    }
    return $groups;
}