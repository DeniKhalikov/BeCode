<?php
declare(strict_types=1);
require_once 'Controller/Student.controller.php';

class HomeController
{
    public function render()
    {
        $studentController = new StudentController();
        $studentController->render();
        
        require_once 'View/HomePage.php';
    }
}