<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class Group
{
    private int $id, $fixed_discount, $variable_discount;
    private ?Group $group;
    private string $name;

    /**
     * Group constructor.
     * @param int $id
     * @param int $parent_id
     * @param int $fixed_discount
     * @param int $variable_discount
     * @param string $name
     * @param GroupLoader $groupLoader
     */
    public function __construct(int $id, int $parent_id, int $fixed_discount, int $variable_discount, string $name, GroupLoader $groupLoader)
    {
        $groups = $groupLoader->getGroups();
        $this->group = ($parent_id !== 0) ? $groups[$parent_id] : null;
        $this->id = $id;
        $this->fixed_discount = $fixed_discount * 100;
        $this->variable_discount = $variable_discount;
        $this->name = $name;
    }

    /**
     * @return Group|null
     */
    public function getGroup(): ?Group
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }

    /**
     * @return int
     */
    public function getFixedDiscount(): int
    {
        return $this->fixed_discount;
    }

}