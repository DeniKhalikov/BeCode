<?php
declare(strict_types=1);

class ClassModel
{
    private ?int $id;
    private string $name;
    private string $location;
    private ?int $teacher_id;

    public function __construct(?int $id, string $name, string $location, ?int $teacher_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->teacher_id = $teacher_id;
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

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getTeacherId(): ?int
    {
        return $this->teacher_id;
    }

    public function setTeacherId(?int $teacher_id): void
    {
        $this->teacher_id = $teacher_id;
    }

    //create class
    public function save(PDO $data)
    {
        $handle = $data->prepare('INSERT INTO class(name, location,teacher_id) VALUES (:name, :location, :teacher_id)');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('location', $this->getLocation());
        $handle->bindValue('teacher_id', $this->getTeacherId());
        $handle->execute();
        $this->id = (int)$data->lastInsertId();
    }

    //save class
    public function saveClass()
    {
        (empty($this->getId())) ? $this->save(DatabaseConnection::connect()) : $this->editClass(DatabaseConnection::connect());
    }

    //edit class
    public function editClass(PDO $data)
    {
        $handle = $data->prepare('UPDATE class SET name = :name, location = :location ,teacher_id = :teacher_id WHERE id = :id');
        $handle->bindValue('name', $this->getName());
        $handle->bindValue('location', $this->getLocation());
        $handle->bindValue('teacher_id', $this->getTeacherId());
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }

    //delete class
    public function deleteClass(PDO $data)
    {
        $handle = $data->prepare('DELETE FROM class WHERE id = :id');
        $handle->bindValue('id', $this->getId());
        $handle->execute();
    }
}