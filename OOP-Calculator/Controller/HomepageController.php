<?php


class HomepageController
{
    public function render(array $GET, array $POST)
    {

        /**
         * @var Product[]
         */

        $productLoader = new ProductLoader();
        $products = $productLoader->getProducts();
        $customers = getAllCustomerInfo();

        require 'View/homepage.php';

    }
}