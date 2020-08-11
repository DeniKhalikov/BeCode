<?php
declare(strict_types=1);

class TeacherLoader extends DatabaseConnection
{
    private array $teacher = [];

    public function __construct()
    {
        $handle = DatabaseConnection::connect()->prepare('SELECT * FROM teacher');
        $handle->execute();
        $teachers = $handle->fetchAll();
        foreach ($teachers as $teacher) {
            $this->teacher[$teacher['id']] = new Teacher((int)$teacher['id'], (string)$teacher['name'], (string)$teacher['email']);
        }
    }

    public function geTeacher(): array
    {
        return $this->teacher;
    }
}