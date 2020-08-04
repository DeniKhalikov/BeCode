<?php


class Group
{
    private int $id, $parentId, $fixedDiscount, $variableDiscount;
    private string $name;

    /**
     * @var Customer[]
     */
    private array $customers;
}