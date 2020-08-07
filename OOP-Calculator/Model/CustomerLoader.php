<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class CustomerLoader extends DataLoader
{
    /**
     * @var Customer[]
     */
    private array $customers;

    /**
     * CustomerLoader constructor.
     */
    public function __construct()
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM customer');
        $handle->execute();
        $customers = $handle->fetchAll();
        $groupsLoader = new GroupLoader();
        $groups = $groupsLoader->getGroups();
        foreach ($customers as $customer) {
            $group = $groups[$customer['group_id']];
            $this->customers[$customer['id']] = new Customer((int)$customer['id'], $customer['firstname'], $customer['lastname'], $group, (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
    }

    /**
     * @return Customer[]
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }
}