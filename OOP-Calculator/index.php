<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//include all your model files here
require 'credentials/database.php';
require 'Model/DataLoader.php';
require 'Model/Product.php';
require 'Model/ProductLoader.php';
require 'Model/Customer.php';
require 'Model/CustomerLoader.php';
require 'Model/Group.php';
require 'Model/GroupLoader.php';
require 'Model/database_manipulation.php';
//include all your controllers here
require 'Controller/LoginController.php';
require 'Controller/PriceCalculatorController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new LoginController();

if (isset($_POST['firstName'], $_POST['lastName'])) {
    if (empty($_POST['firstName']) || empty($_POST['lastName'])){
        throw new Exception('All the fields are required.');
    }
    $controller = new PriceCalculatorController();
}

if(isset($_SESSION['customer'])){
    $controller = new PriceCalculatorController();
}

$controller->render();