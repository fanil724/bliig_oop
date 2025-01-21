<?php


class Device
{
    protected string $name;
    protected int $price;
    protected array $components = [];

    public function __construct(string $Name = "", int $Price = 0)
    {
        $this->name = $Name;
        $this->price = $Price;
    }

    public function __get(mixed $name)
    {
        return $this->$name;
    }

    public function __set(mixed $key, mixed $value)
    {
        $this->$key = $value;
    }
}

class PC extends Device
{
    public function __construct(string $Name = "", int $Price = 0)
    {
        parent::__construct($Name, $Price);
    }
    public function addComponent(mixed $component): void
    {
        $this->components[] = $component;
    }

    public function calculatingPrice()
    {
        foreach ($this->components as $component) {
            if ($component instanceof  SystemBlock) {
                $component->calculatingPrice();
                $this->price += $component->price;
            } else {
                $this->price += $component->price;
            }
        }
    }
}



class SystemBlock extends Device
{
    public function __construct(string $Name = "", int $Price = 0)
    {
        parent::__construct($Name, $Price);
    }

    public function calculatingPrice()
    {
        foreach ($this->components as $component) {
            $this->price += $component->price;
        }
    }

    public function addComponent(Component $component): void
    {
        $this->components[] = $component;
    }
}


class Component
{
    protected string $name;
    protected int $price;
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
