<?php
declare(strict_types=1);

class Student
{
    protected ?int $id;
    private string $name;
    private string $email;
    private ?int $class_id;

    public function __construct(string $name, string $email, ?int $class_id = null, ?int $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->class_id = $class_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getClassId(): ?int
    {
        return $this->class_id;
    }

    public function setClassId(?int $class_id): void
    {
        $this->class_id = $class_id;
    }

    //create students
    public function saveStudent(PDO $data)
    {
        $handle = $data->prepare('INSERT INTO student(name, email, class_id) VALUES (:name, :email, :class_id)');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('email', $this->getEmail());
        $handle->bindValue('class_id', $this->getClassId());
        $handle->execute();
        $this->id = (int)$data->lastInsertId();
    }

    //save students
    public function save()
    {
        (empty($this->getId())) ? $this->saveStudent(DatabaseConnection::connect()) : $this->update(DatabaseConnection::connect());
    }

    //edit students
    public function update(PDO $data)
    {
        $handle = $data->prepare('UPDATE student SET name = :name, email = : email, class_id = :class_id WHERE id = :id');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('email', $this->getEmail());
        $handle->bindValue('class_id', $this->getClassId());
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }

    //delete students
    public function delete(PDO $data)
    {
        $handle = $data->prepare('DELETE FROM student WHERE id = :id');
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }
}