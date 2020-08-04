<?php


class Customer
{
    private int $id, $fixedDiscount, $variableDiscount;
    private string $firstName, $lastName;
    private Group $group;



    /**
     * Customer constructor.
     * @param int $id
     * @param Group $group
     * @param int $fixedDiscount
     * @param int $variableDiscount
     * @param string $firstName
     * @param string $lastName
     */



    public function __construct(int $id, Group $group, int $fixedDiscount, int $variableDiscount, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->group = $group;
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

//    /**
//     * @return Group
//     */
//    public function getGroup(): Group
//    {
//
//    }
//
//    /**
//     * @param Group[] $groups
//     * @return int
//     */
//
//    public function getFinalVariableDiscount(array $groups): int
//    {
//        $customerVariableDiscount = $this->getVariableDiscount();
//    }



}