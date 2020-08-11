<?php
declare(strict_types=1);

//import model
require_once 'Model/DatabaseConnection.php';
require_once 'Model/Class.model.php';
require_once 'Model/ClassLoader.model.php';
require_once 'Model/Student.model.php';
require_once 'Model/StudentLoader.model.php';
require_once 'Model/Teacher.model.php';
require_once 'Model/TeacherLoader.model.php';
//import controller
require_once 'Controller/Home.controller.php';
require_once 'Controller/Class.controller.php';
require_once 'Controller/ClassDetailedOverview.controller.php';
require_once 'Controller/ClassOverview.controller.php';
require_once 'Controller/Student.controller.php';
require_once 'Controller/StudentDetailedOverview.controller.php';
require_once 'Controller/StudentOverview.controller.php';
require_once 'Controller/Teacher.controller.php';
require_once 'Controller/TeacherDetailedOverview.controller.php';
require_once 'Controller/TeacherOverview.controller.php';

$HomeController = new HomeController();
$HomeController->render();

