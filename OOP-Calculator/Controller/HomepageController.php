<?php


class HomepageController
{
    public function render(array $GET, array $POST)
    {

        /**
         * @var Product[]
         */

        $products = getAllProductInfo();

        require 'View/homepage.php';


    }
}