<?php


class ProductLoader extends DataLoader
{
    /**
     * @var Product[]
     */
    private array $products;

    /**
     * ProductLoader constructor.
     */
    public function __construct()
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM product');
        $handle->execute();
        $products = $handle->fetchAll();
        foreach ($products as $product) {
            $this->products[$product['id']] = new Product((int)$product['id'], $product['name'], (int)$product['price']);
        }
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

}