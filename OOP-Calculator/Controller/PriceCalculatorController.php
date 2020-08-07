<?php
declare(strict_types=1);
//Displaying errors since this is turned off by default
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();

class PriceCalculatorController
{
    public function render(): void
    {
        /**
         * @var Product[]
         */
        $productsLoader = new ProductLoader();
        $products = $productsLoader->getProducts();
        /**
         * @var Customer[]
         */
        $customersLoader = new CustomerLoader();
        $customers = $customersLoader->getCustomers();

        if (isset($_POST['firstName'], $_POST['lastName'])) {
            $customerFound = false;
            foreach ($customers as $customer) {
                if (strtolower($customer->getFirstName()) === strtolower($_POST['firstName'])
                    && strtolower($customer->getLastName()) === strtolower($_POST['lastName'])) {
                    $_SESSION['customer'] = $customer;
                    $customerFound = true;
                    break;
                }
            }
            if(!$customerFound) {
                throw new Exception('Customer not found');
            }
        }
        $customer = $_SESSION['customer'];
        $message = '';
//        if(isset($_POST['productId'], $_POST['customerId'])){
//            $customer = $customers[(int)$_POST['customerId']];
//            $finalPrice = $customer->calculatePrice($products[(int)$_POST['productId']])/100;
//        }
        if (isset($_POST['productId'])) {
            $chosenProduct = $products[(int)$_POST['productId']];
            $finalPriceToBeDisplay = number_format($customer->calculatePrice($chosenProduct) / 100, 2);
            $message = "<h5 class='text-center bg-danger text-white p-3 font-weight-bold'>Your price: &euro;{$finalPriceToBeDisplay}</h5>";
        }

        require __DIR__ . '/../View/price_calculator.php';
    }
}