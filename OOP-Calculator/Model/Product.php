<?php


class Product
{
    // properties of the class Product
    private int $id, $price;
    private string $name;

    /**
     * Product constructor.
     * @param int $id
     * @param int $price
     * @param string $name
     */

    // (paramaters of the function)
    public function __construct(int $id, string $name, int $price)
    {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
    }


}