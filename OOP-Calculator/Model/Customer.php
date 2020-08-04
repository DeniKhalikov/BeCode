<?php


class Customer
{
    private int $id, $groupId, $fixedDiscount, $variableDiscount;
    private string $firstName, $lastName;

    /**
     * @var Product[]
     */
    private array $products;
}