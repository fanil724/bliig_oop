<?php






class GroceryBasket
{
    private int $priceBuscet;
    private  array $products;
    private int $countProduct;
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }


    public function __construct()
    {
        $this->priceBuscet = 0;
        $this->products = [];
        $this->countProduct = 0;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
        $this->countProduct++;
    }
    public function basketCounting(): void
    {
        if (count($this->products) == 0) {
            $this->priceBuscet = 0;
            return;
        }

        foreach ($this->products as $product) {
            $this->priceBuscet += $product->price;
        }
    }
}

class Product
{
    private string $name;
    private int $price;

    public function __construct(string $Name = "", int $Price = 0)
    {
        $this->name = $Name;
        $this->price = $Price;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}
