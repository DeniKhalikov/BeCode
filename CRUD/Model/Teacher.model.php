<?php
declare(strict_types=1);

class Teacher extends Student
{
    //create teachers
    public function createTeacher(PDO $data)
    {
        $handle = $data->connect()->prepare('INSERT INTO teacher(name, email) VALUES (:name, : email)');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('email', $this->getEmail());
        $handle->execute();
        $this->id = (int)$data->lastInsertId();
    }

    //save teachers
    public function save()
    {
        (empty($this->getId())) ? $this->createTeacher(DatabaseConnection::connect()) : $this->update(DatabaseConnection::connect());
    }

    //edit teachers
    public function update(PDO $data)
    {
        $handle = $data->connect()->prepare('UPDATE teacher SET name = :name, email = : email WHERE id = :id');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('email', $this->getEmail());
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }

    //delete teachers
    public function delete(PDO $data)
    {
        $handle = $data->connect()->prepare('DELETE FROM teacher WHERE id = :id');
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }
}