<?php

namespace Fan724\BlogOpp\Model;

use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Interfaces\IModel;

abstract class DbModel implements IModel
{
    abstract static protected function getTableName(): string;
    abstract public function __get(string $name): mixed;
    abstract public function __set(string $name, mixed $value): void;

    public static function getOne(int $id)
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table WHERE id = $id" . PHP_EOL;
        return Db::getInstance()->queryOne($sql);
    }


    public static function getAll()
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table" . PHP_EOL;
        return Db::getInstance()->queryAll($sql);
    }

    public function save()
    {
        if (is_null($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
        return $this;
    }

    public function insert(): static
    {
        $table = $this->getTableName();
        $arrClass = (array)$this->props;
        unset($arrClass['id']);
        $values = implode(',', array_keys($arrClass));
        $val = implode(',', $this->convert(array_keys($arrClass)));

        $sql = "INSERT INTO $table ($values) VALUES ($val)";
        echo $sql;
        Db::getInstance()->execute($sql, $this->getValues(array_keys($arrClass)));
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    public function update(): static
    {
        $table = $this->getTableName();
        $arrClass = (array)$this;
        unset($arrClass['id']);
        var_dump((array)$this);

        $values = implode(',', array_keys($arrClass));
        $val = implode(',', $this->convert(array_keys($arrClass)));

        $sql = "INSERT INTO $table ($values) VALUES ($val)";
        echo $sql;
        Db::getInstance()->execute($sql, $this->getValues(array_keys($arrClass)));
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    protected function convert(array $arr): array
    {
        $arrays = [];
        foreach ($arr as $ar) {
            $arrays[] = ":" . $ar;
        }
        return $arrays;
    }
    protected function getValues(array $array): array
    {
        $arr = [];
        foreach ($array as $ar) {
            $arr[$ar] =  $this->$ar;
        }
        return $arr;
    }
}
