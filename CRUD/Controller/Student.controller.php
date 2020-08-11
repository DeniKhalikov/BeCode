<?php
declare(strict_types=1);

class StudentController
{
    public function render()
    {
        if (empty($_POST['class'])) {
            $classLoader = new ClassLoader();
            $classes = $classLoader->getClass();
        }
        if (isset($_POST['submit'])) {
            $fullName = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $classId = (int)$_POST['class'];
            $students = new Student($fullName, $email, $classId);
            if ($classId !== 0) {
                $students->setClassId($classId);
            }
            $students->save(DatabaseConnection::connect());
        }
        require_once 'View/student.view.php';
    }
}