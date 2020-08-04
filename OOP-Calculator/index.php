<?php
//include all your model files here
// require 'credentials/database.php';
require 'Model/Product.php';
require 'Model/Customer.php';
require 'Model/Group.php';
require 'Model/database_manipulation.php';
//include all your controllers here
require 'Controller/HomepageController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();

$controller->render($_GET, $_POST);

