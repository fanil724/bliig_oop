<?php

namespace Fan724\BlogOpp\Model;

use Fan724\BlogOpp\Core\Db;
use Fan724\BlogOpp\Interfaces\IModel;

abstract class Model implements IModel
{
    public ?int $id = null;
    abstract protected function getTableName(): string;

    public static function getOne(int $id)
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table WHERE id = :id" . PHP_EOL;
        return Db::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }


    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}" . PHP_EOL;
        return Db::getInstance()->queryAll($sql);
    }

    public function insert(): static
    {
        $table = $this->getTableName();
        $arrClass = (array)$this;
        unset($arrClass['id']);

        $values = implode(',', array_keys($arrClass));
        $val = implode(',', $this->convert(array_keys($arrClass)));
        $sql = "INSERT INTO $table ($values) VALUES ($val)";

        Db::getInstance()->execute($sql, $arrClass);
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
}
