<?php


class HomepageController
{
    public function render(array $GET, array $POST)
    {

        /**
         * @var Product[]
         */

        $products = getAllProductInfo();
        $customers = getAllCustomerInfo();

        require 'View/homepage.php';


    }
}