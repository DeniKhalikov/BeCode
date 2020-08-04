<?php


class Customer
{
    private int $id, $groupId, $fixedDiscount, $variableDiscount;
    private string $firstName, $lastName;

    /**
     * @var Product[]
     */
    private array $products;

    /**
     * Customer constructor.
     * @param int $id
     * @param int $groupId
     * @param int $fixedDiscount
     * @param int $variableDiscount
     * @param string $firstName
     * @param string $lastName
     */



    public function __construct(int $id, int $groupId, int $fixedDiscount, int $variableDiscount, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return int
     */
    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }



}