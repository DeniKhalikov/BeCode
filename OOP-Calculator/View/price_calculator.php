<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="container">
    <h2><?=
        /**
         * @var Customer $customer
         */
        "Hello " . $customer->getFirstName()  . " " . $customer->getLastName(); ?></h2>
    <p>Check your special price:</p>
    <form method="post">
        <div class="input-group mb-3">
            <select name="productId" class="custom-select">
                <option selected disabled value="">Choose a product</option>
                <?php
                /**
                 * @var Product[] $products
                 */
                foreach ($products as $productId => $product) {
                    $name = ucwords($product->getName());
                    $price = number_format($product->getPrice() / 100, 2);
                    $selected = '';
                    if (isset($_POST['productId'])) {
                        $id = (int)htmlspecialchars(trim($_POST['productId']));
                        if ($product->getId() === $id) {
                            $selected = 'selected';
                        }
                    }
                    echo "
                <option value='{$productId}' {$selected}>{$name} | &euro;{$price}</option>
                ";
                }
                ?>
            </select>
<!--            <select name="customerId" class="custom-select">-->
<!--                <option selected disabled value="">Choose a customer</option>-->
<!--                --><?php
//                /**
//                 * @var Customer[] $customers
//                 */
//                foreach ($customers as $customerId => $customer) {
//                    $name = ucwords($customer->getFirstName() . " " . $customer->getLastName());
//                    $selected = '';
//                    if (isset($_POST['customerId'])) {
//                        $id = (int)htmlspecialchars(trim($_POST['customerId']));
//                        if ($customer->getId() === $id) {
//                            $selected = 'selected';
//                        }
//                    }
//                    echo "
//                <option value='{$customerId}' {$selected}>{$name}</option>
//                ";
//                }
//                ?>
<!--            </select>-->
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <div class="py-4"><?php
            /**
             * @var string $message;
             */
            echo $message;
            ?>
    </div>
    <div>
        <h3 class="text-center">Details of all discounts</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Fixed Discount (&euro;)</th>
                <th scope="col">Variable Discount (%)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">You</th>
                <td><?php
                    /**
                     * @var Customer $customer
                     */
                    echo 0.01*$customer->getFixedDiscount();
                    ?></td>
                <td><?= $customer->getVariableDiscount(); ?></td>
            </tr>
            <?php
            /**
             * @var Group $group
             */
            $group = $customer->getGroup();
            while ($group !== null) {
                $name = ucwords($group->getName());
                $fixedDiscount = 0.01 * $group->getFixedDiscount();
                echo "
                <tr>
                    <th scope='row'>{$name}</th>
                    <td>{$fixedDiscount}</td>
                    <td>{$group->getVariableDiscount()}</td>
                </tr>
                ";
                $group = $group->getGroup();
            }
            ?>
            </tbody>
        </table>
    </div>

</section>
<?php require 'includes/footer.php' ?>
