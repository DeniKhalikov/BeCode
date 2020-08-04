<?php


class Group
{
    private int $id, $parentId, $fixedDiscount, $variableDiscount;
    private string $name;



    /**
     * Group constructor.
     * @param int $id
     * @param int $parentId
     * @param int $fixedDiscount
     * @param int $variableDiscount
     * @param string $name
     */
    public function __construct(int $id, int $parentId, int $fixedDiscount, int $variableDiscount, string $name)
    {
        $this->id = $id;
        $this->parentId = $parentId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
        $this->name = $name;
    }


}