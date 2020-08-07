<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class LoginController
{
    public function render(): void
    {

        require __DIR__ . '/../View/login.php';
    }
}