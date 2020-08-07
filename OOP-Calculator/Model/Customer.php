<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class Customer
{
    private Group $group;
    private string $firstName, $lastName;
    private int $id;
    private int $fixed_discount;
    private int $variable_discount;

    /**
     * Customer constructor.
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param Group $group
     * @param int $fixed_discount
     * @param int $variable_discount
     */
    public function __construct(int $id, string $firstName, string $lastName, Group $group, int $fixed_discount, int $variable_discount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->fixed_discount = $fixed_discount*100;
        $this->variable_discount = $variable_discount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @return float|int
     */
    public function getFixedDiscount()
    {
        return $this->fixed_discount;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }

    public function getMaxVariableDiscountOfGroups(): int
    {

        $group = $this->group;
        $max = $group->getVariableDiscount();
        while($group->getGroup() !== null) {
            $variableDiscountOfGroup = $group->getGroup()->getVariableDiscount();
            $max = ($max < $variableDiscountOfGroup) ? $variableDiscountOfGroup : $max;
            $group = $group->getGroup();
        }
        return $max;
    }

    public function getFixedDiscountOfGroups(): int
    {
        $group = $this->group;
        $sum = $group->getFixedDiscount();
        while($group->getGroup() !== null) {
            $fixedDiscountOfGroup = $group->getGroup()->getFixedDiscount();
            $sum += $fixedDiscountOfGroup;
            $group = $group->getGroup();
        }
        return $sum;
    }

    /**
     * @param Product $product
     * @return float
     */
    public function calculatePrice(Product $product): float
    {

        $productOriginalPrice = $product->getPrice();
        //Getting the two discounts from the groups, compare to see which one is better
        $maxVariableDiscountOfGroups = $this->getMaxVariableDiscountOfGroups();
        $sumFixedDiscountOfGroups = $this->getFixedDiscountOfGroups();
        $groupFixedDiscount = $groupVariableDiscount = 0;
        if($productOriginalPrice*$maxVariableDiscountOfGroups*0.01 < $sumFixedDiscountOfGroups) {
            $groupFixedDiscount = $sumFixedDiscountOfGroups;
        } else {
            $groupVariableDiscount = $maxVariableDiscountOfGroups;
        }

        //Finally combine with the customer discount
        //In any case, one of the two $groupFixedDiscount or $groupVariableDiscount will be 0.
        $price = $productOriginalPrice - $groupFixedDiscount - $this->fixed_discount;
        $price *= 1 - max($this->variable_discount, $groupVariableDiscount)*0.01;
        return $price;
    }
}