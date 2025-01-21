<?php



class Transport
{
    protected string $marka;
    protected string $model;

    public function __construct(string $Marka = "", string $Model = "")
    {
        $this->model = $Model;
        $this->marka = $Marka;
    }

    protected function move(): void {}
    protected function dispaly(): void {}
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}


class Car extends Transport
{
    private int $weelBase;

    public function __construct(int $WeelBase, string $Marka = "", string $Model = "")
    {
        parent::__construct($Marka, $Model);
        $this->weelBase = $WeelBase;
    }

    public function move(): void
    {
        echo "$this->model едет по дроге" . PHP_EOL;
    }
    public function dispaly(): void
    {
        echo "У $this->model  $this->weelBase оси" . PHP_EOL;
    }
}

class Ship extends Transport
{
    private int $numberDecks;

    public function __construct(int $NumberDecks, string $Marka = "", string $Model = "")
    {
        parent::__construct($Marka, $Model);
        $this->numberDecks = $NumberDecks;
    }

    public function move(): void
    {
        echo "$this->model плывет по морю" . PHP_EOL;
    }
    public function dispaly(): void
    {
        echo "$this->model имеет  $this->numberDecks палуб" . PHP_EOL;
    }
}


class AirPlane extends Transport
{
    private int $numberEngine;

    public function __construct(int $NumberEngine, string $Marka = "", string $Model = "")
    {
        parent::__construct($Marka, $Model);
        $this->numberEngine = $NumberEngine;
    }

    public function move(): void
    {
        echo "$this->model летит в небе" . PHP_EOL;
    }
    public function dispaly(): void
    {
        echo "$this->model имеет  $this->numberEngine двигателя" . PHP_EOL;
    }
}
